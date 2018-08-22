package main

import (
	f "fmt"
)

func getMax(a, b int) int {
	if a > b {
		return a
	} else {
		return b
	}
}

func main() {
	x := 3
	y := 12
	max := getMax(x, y)
	f.Println("最大值为 ", max)

	for i := 0; i < 5; i++ {
		//defer Printf("%d ", i)
	}

	//slice := []int{1, 2, 3, 4, 5, 7}
	//f.Println("slice = ", slice)

}
