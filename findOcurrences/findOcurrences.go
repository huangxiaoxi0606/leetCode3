package main

import (
	"strings"
	"fmt"
)

//给出第一个词 first 和第二个词 second，考虑在某些文本 text 中可能以 "first second third" 形式出现的情况，其中 second 紧随 first 出现，third 紧随 second 出现。
//对于每种这样的情况，将第三个词 "third" 添加到答案中，并返回答案。

func findOcurrences(text string, first string, second string) []string {
	data := strings.Split(text, " ")
	ret := []string{}
	for i := 0; i < len(data)-2; i++ {
		if data[i] == first && data[i+1] == second {
			ret = append(ret, data[i+2])
		}
	}
	return ret

}
func main()  {
	text := "alice is a good girl she is a good student"
	first := "a"
	second := "good"
	fmt.Print(findOcurrences(text ,first,second))
}
