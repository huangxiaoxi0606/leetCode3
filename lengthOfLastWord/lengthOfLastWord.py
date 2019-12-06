#!/usr/bin/env python
# encoding: utf-8
'''
@author: hhx
@file: lengthOfLastWord.py
@time: 2019/12/6 12:17
@desc: 给定一个仅包含大小写字母和空格 ' ' 的字符串，返回其最后一个单词的长度。
       如果不存在最后一个单词，请返回 0 。
'''

class Solution:
    def lengthOfLastWord(self, s: str) -> int:
        s = s.strip(' ')
        if not s:
            return 0
        else:
            L = s.split(' ')
            return len(L[-1])
