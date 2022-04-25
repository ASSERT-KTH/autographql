## AutoGraphQL - Replication Package

This is a replication package for our manuscript titled "[Harvesting Production GraphQL Queries to Detect Schema Faults](http://arxiv.org/pdf/2112.08267)"

```bibtex
@inproceedings{autographql2022,
 title = {Harvesting Production GraphQL Queries to Detect Schema Faults},
 booktitle = {Proceedings of the International Conference on Software Testing,
  Verification and Validation (ICST)},
 year = {2022},
 author = {Louise Zetterlund and Deepika Tiwari and Martin Monperrus and Benoit Baudry},
 url = {http://arxiv.org/pdf/2112.08267},
}
```

- The tool is at `tool/autographql/`
- Files related to experiments are within `experiments/`
  - `analysis/` contains analysis notebooks
  - `data/` contains raw and generated data
  - `results/` contains harvested queries and generated tests for our open-source case study, Saleor
  - `saleor-platform/` contains Saleor, extended for query harvesting
