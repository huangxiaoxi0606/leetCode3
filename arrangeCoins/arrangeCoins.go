/*
@Time : 2019/12/23 15:40
@Author : hhx06
@File : arrangeCoins
@Software: GoLand
*/
package arrangeCoins

func arrangeCoins(n int) int {
	// return int(math.Sqrt(float64(n*8) + 1) / 2 - 0.5)
	if n == 0 {
		return 0
	}
	left, right := 1, n
	for left < right {
		mid := (left + right) >> 1
		if (mid*(mid+1))>>1 < n {
			left = mid + 1
		} else {
			right = mid
		}
	}
	if left*(left+1)>>1 == n {
		return left
	}
	return left - 1
}