#! /usr/bin/env python
#-*- coding:utf-8 -*-

import sys

str_list = sys.argv[1::]

for i in range(len(str_list)):
    if i < 4:
        sys.stdout.write(str_list[i]+'\n')
    else:
        sys.stderr.write(str_list[i]+'\n')
