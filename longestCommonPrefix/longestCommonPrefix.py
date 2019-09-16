#!/usr/bin/env python
# -*- coding: utf-8 -*-
# @Time : 2019/9/16 12:07
# @Author : hhx06
# @Site : 
# @File : longestCommonPrefix.py
# @Software: PyCharm
class Solution:
    def longestCommonPrefix(self, strs: List[str]) -> str:
        if not strs: return ""
        ss = list(map(set, zip(*strs)))
        res = ""
        for i, x in enumerate(ss):
            x = list(x)
            if len(x) > 1:
                break
            res = res + x[0]
        return res