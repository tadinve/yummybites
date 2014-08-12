#!/bin/bash
sony=$(date +%Y-%m-%d-%H-%M)
echo $sony
filename="pulllogs.$sony.log"
echo $filename
#git pull origin master > $filename




   echo There are $# arguments to $0: $*
   echo first argument: $1
   echo second argument: $2
   echo third argument: $3
   echo here they are again: $@
