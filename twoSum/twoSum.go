package main

import "fmt"

//题目描述：给定一个整数数组 nums 和一个目标值 target，请你在该数组中找出和为目标值的那 两个 整数，并返回他们的数组下标。
//你可以假设每种输入只会对应一个答案。但是，你不能重复利用这个数组中同样的元素。
func twoSum(nums []int, target int) []int {
	var flag int
	datas :=make(map[int]int,10)
	for i:=0; i<len(nums);i++ {
		flag =target - nums[i]
		if value,ok :=datas[flag] ;ok{
			return []int{value,i}
		}else{
			datas[nums[i]] =i
		}
	}
	return []int{0}

}

func main()  {
	target := 9
	nums := []int{1,2,7,11,15}

	fmt.Print(twoSum(nums,target))
	//[1,2]


}