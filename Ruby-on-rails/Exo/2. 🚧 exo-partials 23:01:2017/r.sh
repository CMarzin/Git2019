#!/bin/bash

#reset la db
rake db:migrate:reset
#rewrite la db
rake db:seed
