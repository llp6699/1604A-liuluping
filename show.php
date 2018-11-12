<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
<script type="text/javascript">
    window.onload=function(){
    var oP=document.getElementsByTagName('p')[0];
    var Now=null;
    var New=null;
    var t=null;
    var str=null;
 
    timer();
    setInterval(function(){
    timer();
    },1000)
     
    function timer(){
     Now=new Date();
     New=new Date(2019,0,1,0,0,0);
     t=Math.floor((New-Now)/1000);
     str='距离2019年1月1日还剩下'+Math.floor(t/86400)+'天'+Math.floor(t%86400/3600)+'时'+Math.floor(t%86400%3600/60)+'分'+t%60+'秒';
     oP.innerHTML=str;
    } 
    }    
</script>
</head>
<body>
<p></p>
</body>
</html>