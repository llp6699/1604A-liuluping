<?php
/*1:无重复的数字是多少*/
include"stdio.h"
include "conio.h"
main()
{
  int i,j,k;
  printf("\n");
  for(i=1;i<5;i++) /*以下为三重循环*/
    for(j=1;j<5;j++)
      for (k=1;k<5;k++)
      {
        if (i!=k&&i!=j&&j!=k) /*确保i、j、k三位互不相同*/
        printf("%d,%d,%d\n",i,j,k);
      }
  getch();
/*2:编写一个单例模式*/
public class EagerSingleton
{
private static final EagerSingleton m_instance =
new EagerSingleton();
private EagerSingleton() { }
public static EagerSingleton getInstance()
{
return m_instance;
}
}
/*3．编写php函数，实现遍历指定文件夹下的所有文件和子文件夹*/
<?php
function my_dir($dir) {
    $files = array();
    if(@$handle = opendir($dir)) { //注意这里要加一个@，不然会有warning错误提示：）
        while(($file = readdir($handle)) != = false) {
            if($file != ".." && $file != ".") { //排除根目录；
                if(is_dir($dir."/".$file)) { //如果是子文件夹，就进行递归
                    $files[$file] = my_dir($dir."/".$file);
                } else { //不然就将文件的名字存入数组；
                    $files[] = $file;
                }
 
            }
        }
        closedir($handle);
        return $files;
    }
}
echo "<pre>";
print_r(my_dir("."));
echo "</pre>";
?>