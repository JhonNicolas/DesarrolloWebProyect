<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="../Imagenes/IProductos/Inicio/LOGO.jpg">
        <title>Restaurante Pihuicho</title>    
        <link href="EstiloDashboard.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head>
    <body> 
        
        <div id="mySidenav" class="sidenav">
            <p class="logo"><span>M</span>-SoftTech</p>
            <a href="#" class="icon-a"><i class="fa fa-dashboard icons"></i>&nbsp;&nbsp;Dashboard</a>
            <a href="#" class="icon-a"><i class="fa fa-users icons"></i>&nbsp;&nbsp;Customers</a>
            <a href="#" class="icon-a"><i class="fa fa-list icons"></i>&nbsp;&nbsp;Projects</a>
            <a href="#" class="icon-a"><i class="fa fa-shopping-bag icons"></i>&nbsp;&nbsp;Orders</a>
            <a href="#" class="icon-a"><i class="fa fa-tasks icons"></i>&nbsp;&nbsp;Inventory</a>
            <a href="#" class="icon-a"><i class="fa fa-user icons"></i>&nbsp;&nbsp;Accounts</a>
            <a href="#" class="icon-a"><i class="fa fa-list-alt icons"></i>&nbsp;&nbsp;Tasks</a>
        </div>
        
        <div id="main">
            <div class="head">
                <div class="col-div-6">
                    <span style="font-size: 30px; cursor: pointer;color: white;" class="nav">
                    &#9776; Dashboard</span>
                    <span style="font-size: 30px; cursor: pointer;color: white;" class="nav2">
                     &#9776; Dashboard</span>
                </div>
                
                <div class="col-div-6">
                    <div class="profile">
                        <img src="../Imagenes/User-Avatar.png" class="pro-img">    
                        <p>Manoj Adhikari <span>UI / UX DESIGNER</span></p>
                    </div>
                 </div>
                <div class="clearfix"></div>
            </div>
            
            <div class="col-div-3">
                <div class="box">
                    <p>67<br/><span>Customers</span></p>
                    <i class="fa fa-users box-icon"></i>
                </div>
            </div>
            <div class="col-div-3">
                <div class="box">
                    <p>88<br/><span>Projects</span></p>
                    <i class="fa fa-list box-icon"></i>
                </div>
            </div>
            <div class="col-div-3">
                <div class="box">
                    <p>99<br/><span>Orders</span></p>
                    <i class="fa fa-shopping-bag box-icon"></i>
                </div>
            </div>
            <div class="col-div-3">
                <div class="box">
                    <p>78<br/><span>Tasks</span></p>
                    <i class="fa fa-tasks box-icon"></i>
                </div>
            </div>
            
            <div class="clearfix"></div>
            <br/><br/>
            
            <div class="col-div-8">
                <div class="box-8">
                    <div class="content-box">
                        <p>Top Selling Projects <span>View All</span></p>
                        <br/>
                        <table>
                            <tr>
                                <th>Company</th>
                                <th>Contact</th>
                                <th>Country</th>
                            </tr>
                            <tr>
                                <td>Alfreds Futterkiste</td>
                                <td>Alfreds</td>
                                <td>Futterkiste</td>
                            </tr>
                            <tr>
                                <td>Alfreds Futterkiste</td>
                                <td>Alfreds</td>
                                <td>Futterkiste</td>
                            </tr>
                            <tr>
                                <td>Alfreds Futterkiste</td>
                                <td>Alfreds</td>
                                <td>Futterkiste</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            
            <div class="col-div-4">
                <div class="box-4">
                    <div class="content-box">
                        <p>Total Sale <span>View All</span></p>
                        <div class="circle-wrap">
                            <div class="circle">
                                <div class="mask full">
                                    <div class="fill"></div>
                                </div>
                                <div class="mask half">
                                    <div class="fill"></div>
                                </div>
                                <div class="inside-circle">70%</div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
            
            <div class="clearfix"></div>
            
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script type="text/javascript">
            $(".nav").click(function(){
               $("#mySidenav").css('width','70px');
               $("#main").css('margin-left','70px');
               $(".logo").css('visibility','hidden');
               $(".logo span").css('visibility','visible');
               $(".logo span").css('margin-left','-10px');
               $(".icon-a").css('visibility','hidden');
               $(".icons").css('visibility','visible');
               $(".icons").css('margin-left','-8px');
               $(".nav").css('display','none');
               $(".nav2").css('display','block');
            });
            $(".nav2").click(function(){
               $("#mySidenav").css('width','300px');
               $("#main").css('margin-left','300px');
               $(".logo").css('visibility','visible');
               $(".logo span").css('visibility','visible');
               $(".icon-a").css('visibility','visible');
               $(".icons").css('visibility','visible');
               $(".nav").css('display','block');
               $(".nav2").css('display','none');
            });
        </script>
        
    </body>
</html>