<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>


<script language="JavaScript1.2">

/*
Up down slideshow Script
By Dynamic Drive (www.dynamicdrive.com)
For full source code, terms of use, and 100's more scripts, visit http://www.dynamicdrive.com
*/

///////configure the below four variables to change the style of the slider///////
//set the scrollerwidth and scrollerheight to the width/height of the LARGEST image in your slideshow!
var scrollerwidth='300px'
var scrollerheight='347px'
//3000 miliseconds=3 seconds
var pausebetweenimages=3000

//configure the below variable to change the images used in the slideshow. If you wish the images to be clickable, simply wrap the images with the appropriate <a> tag
var slideimages=new Array()
slideimages[0]='<a href="er.akshay_girdhar"><img src="1.JPG" border="0"></a>'
slideimages[1]='<img src="2.jpg">'
slideimages[2]='<img src="AmitKamra.jpg">'
slideimages[3]='<img src="login.png">'
slideimages[4]='<img src="clg_logo.jpg">'
//extend this list

///////Do not edit pass this line///////////////////////

var ie=document.all
var dom=document.getElementById

if (slideimages.length>2)
i=2
else
i=0

function move1(whichlayer){
tlayer=eval(whichlayer)
if (tlayer.top>0&&tlayer.top<=5){
tlayer.top=0
setTimeout("move1(tlayer)",pausebetweenimages)
setTimeout("move2(document.main.document.second)",pausebetweenimages)
return
}
if (tlayer.top>=tlayer.document.height*-1){
tlayer.top-=5
setTimeout("move1(tlayer)",50)
}
else{
tlayer.top=parseInt(scrollerheight)
tlayer.document.write(slideimages[i])
tlayer.document.close()
if (i==slideimages.length-1)
i=0
else
i++
}
}

function move2(whichlayer){
tlayer2=eval(whichlayer)
if (tlayer2.top>0&&tlayer2.top<=5){
tlayer2.top=0
setTimeout("move2(tlayer2)",pausebetweenimages)
setTimeout("move1(document.main.document.first)",pausebetweenimages)
return
}
if (tlayer2.top>=tlayer2.document.height*-1){
tlayer2.top-=5
setTimeout("move2(tlayer2)",50)
}
else{
tlayer2.top=parseInt(scrollerheight)
tlayer2.document.write(slideimages[i])
tlayer2.document.close()
if (i==slideimages.length-1)
i=0
else
i++
}
}

function move3(whichdiv){
tdiv=eval(whichdiv)
if (parseInt(tdiv.style.top)>0&&parseInt(tdiv.style.top)<=5){
tdiv.style.top=0+"px"
setTimeout("move3(tdiv)",pausebetweenimages)
setTimeout("move4(second2_obj)",pausebetweenimages)
return
}
if (parseInt(tdiv.style.top)>=tdiv.offsetHeight*-1){
tdiv.style.top=parseInt(tdiv.style.top)-5+"px"
setTimeout("move3(tdiv)",50)
}
else{
tdiv.style.top=scrollerheight
tdiv.innerHTML=slideimages[i]
if (i==slideimages.length-1)
i=0
else
i++
}
}

function move4(whichdiv){
tdiv2=eval(whichdiv)
if (parseInt(tdiv2.style.top)>0&&parseInt(tdiv2.style.top)<=5){
tdiv2.style.top=0+"px"
setTimeout("move4(tdiv2)",pausebetweenimages)
setTimeout("move3(first2_obj)",pausebetweenimages)
return
}
if (parseInt(tdiv2.style.top)>=tdiv2.offsetHeight*-1){
tdiv2.style.top=parseInt(tdiv2.style.top)-5+"px"
setTimeout("move4(second2_obj)",50)
}
else{
tdiv2.style.top=scrollerheight
tdiv2.innerHTML=slideimages[i]
if (i==slideimages.length-1)
i=0
else
i++
}
}

function startscroll(){
if (ie||dom){
first2_obj=ie? first2 : document.getElementById("first2")
second2_obj=ie? second2 : document.getElementById("second2")
move3(first2_obj)
second2_obj.style.top=scrollerheight
second2_obj.style.visibility='visible'
}
else if (document.layers){
document.main.visibility='show'
move1(document.main.document.first)
document.main.document.second.top=parseInt(scrollerheight)+5
document.main.document.second.visibility='show'
}
}

window.onload=startscroll

</script>


<ilayer id="main" width=&{scrollerwidth}; height=&{scrollerheight}; visibility=hide>
<layer id="first" left=0 top=1 width=&{scrollerwidth};>
<script language="JavaScript1.2">
if (document.layers)
document.write(slideimages[0])
</script>
</layer>
<layer id="second" left=0 top=0 width=&{scrollerwidth}; visibility=hide>
<script language="JavaScript1.2">
if (document.layers)
document.write(slideimages[dyndetermine=(slideimages.length==1)? 0 : 1])
</script>
</layer>
</ilayer>

<script language="JavaScript1.2">
if (ie||dom){
document.writeln('<div id="main2" style="position:relative;width:'+scrollerwidth+';height:'+scrollerheight+';overflow:hidden;">')
document.writeln('<div style="position:absolute;width:'+scrollerwidth+';height:'+scrollerheight+';clip:rect(0 '+scrollerwidth+' '+scrollerheight+' 0);left:0px;top:0px">')
document.writeln('<div id="first2" style="position:absolute;width:'+scrollerwidth+';left:0px;top:1px;">')
document.write(slideimages[0])
document.writeln('</div>')
document.writeln('<div id="second2" style="position:absolute;width:'+scrollerwidth+';left:0px;top:0px;visibility:hidden">')
document.write(slideimages[dyndetermine=(slideimages.length==1)? 0 : 1])
document.writeln('</div>')
document.writeln('</div>')
document.writeln('</div>')
}
</script>

<body>

</body>
</html>
