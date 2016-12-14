#!/usr/bin/env bash
clear;
entry="node node_modules/jasmine-node/bin/jasmine-node --noStack "

echo "Running all tests located in the e2e directory"
command=$entry"spec/"
echo $command
time $command #/nested/uber-nested
echo -e "\033[1;35m--- Should have 12 tests and 87 assertions and 0 Failure. ---\033[0m"
echo ""