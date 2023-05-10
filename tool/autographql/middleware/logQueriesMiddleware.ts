/* eslint-disable camelcase */
import crypto from 'crypto';
import fs from 'fs';
import path from 'path';

import dayjs from 'dayjs';
import uuid from 'uuid';

import { AppRequestHandler } from '$api/apiServices/application/AppRequestHandler';

// a folder beside this middleware's definition
const queriesDirectory = path.resolve(__dirname, './queries');

interface QueryDetail {
  query: string;
  variables: any;
  operation_name: string;
  created_at: string;
  updated_at: string;
  times_called: number;
}

// it could be a redis client but it may not be supported by the project
const queries: Record<string, QueryDetail> = {};

// it restores the currently logged queries from previous sessions and server run
if (fs.existsSync(queriesDirectory)) {
  const files = fs.readdirSync(queriesDirectory);
  for (const file of files) {
    const fileJSON = fs.readFileSync(`${queriesDirectory}/${file}`, 'utf-8');
    const fileObject = JSON.parse(fileJSON) as QueryDetail;
    const queryKey = crypto
      .createHash('sha256')
      .update(fileObject.query + JSON.stringify(fileObject.variables))
      .digest('hex');
    queries[queryKey] = fileObject;
  }
}

// it saves all of the queries with AutoGraphQL structure (uuid.json) regularly
setInterval(() => {
  if (fs.existsSync(queriesDirectory)) {
    fs.rmSync(queriesDirectory, { recursive: true, force: true });
  }
  fs.mkdirSync(queriesDirectory);

  for (const queryDetail of Object.values(queries)) {
    fs.writeFileSync(
      `${queriesDirectory}/${uuid.v4()}.json`,
      JSON.stringify(queryDetail),
    );
  }
}, 10000);

// for each graphql request, it hashes the query+variables.
// if this hash didn't exist in the queries dictionary, it creates one for it in the dictionary
// and if it did, adds one to times called
export const getLogQueriesMiddleware = (): AppRequestHandler => {
  const logQueriesMiddleware: AppRequestHandler = (req, _, next) => {
    const { query, operationName, variables } = req.body;
    // we don't support mutation queries at the moment
    if (query && !query.includes('mutation')) {
      const queryKey = crypto
        .createHash('sha256')
        .update(query + JSON.stringify(variables))
        .digest('hex');

      const now = dayjs().format('YYYY-MM-DD HH:mm:ss');
      if (queries[queryKey]) {
        queries[queryKey].times_called = queries[queryKey].times_called + 1;
        queries[queryKey].updated_at = now;
      } else {
        queries[queryKey] = {
          query,
          variables,
          operation_name: operationName,
          created_at: now,
          updated_at: now,
          times_called: 1,
        };
      }
    }

    next();
  };

  return logQueriesMiddleware;
};
