<!DOCTYPE html>
<html lang="en">
<head>
    <link href="css.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="favicon.png">
    <meta charset="UTF-8">
    <title>Multi Level DropDown</title>
    <style>
html,body{
 padding: 0;
 margin: 0;
 font-family: 'Open Sans', sans-serif;
}
ul{
    margin: 250px auto;
    padding: 250px;
    list-style: none;
    position: center;
}
a{
    margin: 0;
    text-align: center;
    padding: 12px 15px 12px 15px;
    background: #5F6975;
    color: white;
    display: block;
    text-decoration: none;
}
.mainMenu>li{
    display: inline-flex;
    margin-left: -5px;
}
li:hover>a{
    background: #4B545F;
    cursor: pointer;
}
.subMenu{
    position: absolute;
    display: none;
}
.subMenu li{
    border-top: 1px solid #575F6A;
    border-bottom: 1px solid #6B727C;
    position: center;
}
.mainMenu>li:hover .subMenu{
    display: block;
   
}
.SuperSubMenu{
    position: absolute;
    top: 0;
    right: 0;
    -ms-transform: translate(100%,0);
    -webkit-transform: translate(100%,0);
    transform:translate(100%,0);
    display: none;
}
.subMenu li:hover>.SuperSubMenu{
    display: block;
}
    </style>
</head>
<body>
<nav>
    <ul class="mainMenu">
        <li><a href="#">Home</a></li>
        <li><a href="#">Tutorial</a>
         <ul class="subMenu">
             <li><a href="#">Photoshop</a></li>
             <li><a href="#">Illustrator</a></li>
             <li><a href="#">Web Design</a>
                 <ul class="SuperSubMenu">
                     <li><a href="#">HTML</a></li>
                     <li><a>CSS</a>
                         <ul class="SuperSubMenu">
                             <li><a href="#">HTML</a></li>
                             <li><a href="#">CSS</a>
                                 <ul class="SuperSubMenu">
                                     <li><a href="#">HTML</a></li>
                                     <li><a href="#">CSS</a>
                                         <ul class="SuperSubMenu">
                                             <li><a href="#">HTML</a></li>
                                             <li><a href="#">CSS</a>
                                                 <ul class="SuperSubMenu">
                                                     <li><a href="#">HTML</a></li>
                                                     <li><a href="#">CSS</a>
                                                         <ul class="SuperSubMenu">
                                                             <li><a href="#">HTML</a></li>
                                                             <li><a href="#">CSS</a>
                                                                 <ul class="SuperSubMenu">
                                                                     <li><a href="#">HTML</a></li>
                                                                     <li><a href="#">CSS</a></li>
                                                                 </ul>
                                                             </li>
                                                         </ul>
                                                     </li>
                                                 </ul>
                                             </li>
                                         </ul>
                                     </li>
                                 </ul>
                             </li>
                         </ul>
                     </li>
                 </ul>
             </li>
         </ul>
        </li>
        <li><a href="#">Articles</a></li>
        <li><a href="#">Inspiration</a></li>
    </ul>
</nav>
 </body>
</html>
