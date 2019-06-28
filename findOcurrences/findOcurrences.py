#!/usr/bin/env python
# -*- coding: utf-8 -*-
# @Time : 2019/6/28 10:25
# @Author : hhx06
# @Site : 
# @File : findOcurrences.py
# @Software: PyCharm
class Solution:
    def findOcurrences(self, text: str, first: str, second: str) -> List[str]:
        text = text.split(" ")
        new_data =[]
        for i in range (len(text)-2):
            if text[i] == first and text[i+1] ==second:
                new_data.append(text[i+2])
        return new_data