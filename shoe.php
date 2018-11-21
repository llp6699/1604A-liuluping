<?php

int searchCircularly(int* nums, int numsSize, int target)
{
  int first = 0;
  int last = numsSize - 1;
 
  while (first <= last) {  
    int mid = (last - first) / 2 + first;
    if (*(nums + mid) == target)
      return mid;
    else if (*(nums + first) <= *(nums + mid)) {
      if (*(nums + first) <= target && target < *(nums + mid))
        last = mid - 1;
      else
        first = mid + 1;
    }
    else {
      if (*(nums + mid) < target && target <= *(nums + last))
        first = mid + 1;
      else
        last = mid - 1;
    }
  }
  return -1;
}
 
int main()
{
  int a[]={3,4,5,6,7,8,9,0,1,2};
 
  cout<<searchRecursively(a,0,9,0)<<endl;
  cout<<searchCircularly(a,9,0)<<endl;
 
  int ttt = 0;
  return 0;
}
