/* tslint:disable */
/* eslint-disable */
// This file was automatically generated and should not be edited.

import { ProductErrorCode } from "./../../types/globalTypes";

// ====================================================
// GraphQL mutation operation: RemoveCollection
// ====================================================

export interface RemoveCollection_collectionDelete_errors {
  __typename: "ProductError";
  code: ProductErrorCode;
  field: string | null;
}

export interface RemoveCollection_collectionDelete {
  __typename: "CollectionDelete";
  errors: RemoveCollection_collectionDelete_errors[];
}

export interface RemoveCollection {
  collectionDelete: RemoveCollection_collectionDelete | null;
}

export interface RemoveCollectionVariables {
  id: string;
}
