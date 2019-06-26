#!/usr/bin/env python
# -*- coding: utf-8 -*-
# @Time : 2019/6/26 12:19
# @Author : hhx06
# @Site : 
# @File : isMonotonic.py
# @Software: PyCharm
class Solution:
    def isMonotonic(self, A: List[int]) -> bool:
        flag = A[-1] - A[0]
        if flag > 0:
            for i in range(1, len(A)):
                if A[i] < A[i - 1]:
                    return False
        else:
            for i in range(1, len(A)):
                if A[i] > A[i - 1]:
                    return False

        return True