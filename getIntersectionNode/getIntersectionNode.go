/*
@Time : 2020/4/10 17:25
@Author : hhx06
@File : getIntersectionNode
@Software: GoLand
*/
package main


/**
 * Definition for singly-linked list.
 * type ListNode struct {
 *     Val int
 *     Next *ListNode
 * }
 */
func getIntersectionNode(headA, headB *ListNode) *ListNode {
	p1, p2 := headA, headB
	for p1 != p2 {
		if p1 != nil {p1 = p1.Next} else {p1 = headB}
		if p2 != nil {p2 = p2.Next} else {p2 = headA}
	}
	return p1
}

