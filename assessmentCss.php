<style>
body{
    margin:0;
    padding:0;
}
 .content{
    position: relative;
    text-align: center;
} 
.bg{
    opacity: 25%;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height:800px;
}
.normal{
    position:center;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 20px;
    color: black;
}
.heading{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 50px;
    color:darkturquoise;
    margin:0px;
    font-weight: 900px;
}
.row {
    display: flex;
  }
  
.column {
    flex: 20%;
    padding: 8px;
  }
  .image {
    opacity: 1;
    display: block;
    width: 100%;
    height: auto;
    transition: .5s ease;
    border-radius: 150px;
  }
  
  .column:hover .image {
    opacity: 0.5;
  }
  
  .text {
    color: white;
    font-size: 16px;
    padding: 16px 32px;
  }

  .btn {
    /* to adjust according to screen size flexbox is display: flex; is used. */
    display: flex;
  justify-content: center;
  align-items: center;
    display: inline-block;
    padding: 15px 25px;
    font-size: 24px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    outline: none;
    color: #fff;
    background-color:indianred;
    border: none;
    border-radius: 15px;
    box-shadow: 2px 5px peachpuff;
    margin-top: 30px;
}
  
  .btn:hover {background-color:pink}
  
  .btn:active {
    background-color:indianred;
    box-shadow: 0 5px pink;
    transform: translateY(4px);
  }

  /*Quiz*/

* {box-sizing: border-box;}

.mySlides {display: none;}
img {vertical-align: middle;}

#main {
  transition: margin-left .5s;
  padding: 10px;
}


.quiz-h4{
  font-family:cursive;
  font-size:20px;
  text-align:center;
  line-height:2;
  color:#8f8f8f;
}
.quiz-h1{
  font-family:cursive;
  font-size:20px;
  text-align:center;
  font-weight:bold;
  color:lightpink;
  font-size: 50px;
  margin-top: 30px;
}
  /* #Media
  ================================================== */



.grid {
    width: 680px;
    height: 420px;
    background-color:lightpink;
    padding: 10px 10px 10px 10px;
    border: 2px solid ;
    float:right;
    margin-right:0px;
    border-left:0px;
}

.grid h1 {

    font-weight: 300;
    margin: 0px;
    padding: 10px;
    font-size: 20px;
    background-color:rgb(223, 130, 130);
    color: #fff;
    font-family:cursive;
    font-size:20px;
    text-align: center;
    border-radius: 10px;
    
}

#score {
    color: white;
    text-align: center;
    font-size: 20px;
}

.grid #question {
  font-family:cursive;
  font-size:20px;
  font-size: 18px;
  color:   #092532;
  margin:0;
  
}

.know {
  background-color:rgb(231, 105, 105);
  border: 5 px auto;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  font-size: 18px;
  border-radius: 10px;
  display:inline;
  margin-right: auto;
}

.know {
  transition-duration: 0.4s;
}

.know:hover {
  background-color:grey;
  color: white;
}
.music {
  background-color:rgb(231, 105, 105);
  border: 5 px auto;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display:inline;
  font-size: 18px;
  border-radius: 10px;
  margin-left: auto;
}

.music{
  transition-duration: 0.4s;
}

.music:hover {
  background-color:grey;
  color: white;
}

.buttons {
  margin-top: 30px;
  border-radius: 10px;
}

#btn0, #btn1, #btn2, #btn3 {
  background-color:rgb(223, 130, 130);
  width: 180px;
  font-size: 20px;
  color: #fff;
  border: 1px solid #092532;
  margin: 10px auto;
  padding: 5px 5px;
  display: block;
  font-family:cursive;
  border-radius: 10px;

}

#btn0:hover, #btn1:hover, #btn2:hover, #btn3:hover {
  cursor: pointer;
  background-color: #07031a;
}

#btn0:focus, #btn1:focus, #btn2:focus, #btn3:focus {
  outline: 0;
}

#progress {
  color: #092532;
  font-size: 15px;
  font-family:cursive;
  padding:0;
  margin:0;
}
#main{
  /* position: absolute; */
  top:280px;
  right:10px;
  float:right;
}
.image{
  float:left;
  width:543px;
  height:420px;
  border-radius: 0px;
  margin-left:20px;
  border: 2px solid;
  border-right:0px;
}
</style>
