package main

import "fmt"

//如果数组是单调递增或单调递减的，那么它是单调的。
//
//如果对于所有 i <= j，A[i] <= A[j]，那么数组 A 是单调递增的。 如果对于所有 i <= j，A[i]> = A[j]，那么数组 A 是单调递减的。
//
//当给定的数组 A 是单调数组时返回 true，否则返回 false。
func isMonotonic(A []int) bool {
	len := len(A)
	if A[0] <= A[len -1]{
		for i :=1 ;i <len;i++ {
			if A[i-1] >A[i]{
				return false
			}
		}
	}else{
		for i :=1 ;i <len;i++ {
			if A[i-1] <A[i]{
				return false
			}
		}
	}
	return true
}

func main()  {
	A:= []int{1,2,2,1}
	fmt.Print(isMonotonic(A))
}



