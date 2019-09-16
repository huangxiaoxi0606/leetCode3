#!/usr/bin/env python
# -*- coding: utf-8 -*-
# @Time : 2019/9/16 10:21
# @Author : hhx06
# @Site : 
# @File : containsNearbyDuplicate.py
# @Software: PyCharm
class Solution:
    def containsNearbyDuplicate(self,nums,k):
        maps ={}
        for index in range(len(nums)):
            if nums[index] in maps and index - maps[nums[index]] <= k:
                return True
            maps[nums[index]] = index
        return False
