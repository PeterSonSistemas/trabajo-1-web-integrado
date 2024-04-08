<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        
        
        <style type="text/CSS">
            
            .productos{
                display: flex;
                flex-wrap: wrap;
                justify-content: space-evenly;
                gap: 0.7em;
            }
            
            .producto{
                border: 1px solid #0000ff;
                height: 30vh;
                box-shadow: 0px 0px 15px #ff0033;
                border-radius: 10px;
                padding: 0.7em;
                text-align: center;
                
            }
            
            .producto:hover{
                background-color: #ffff00;
                transform: scale(1.06, 1.06);
            }
            
            .producto img{
                display: block;
                width: 80%;
                height: 75%;
                margin: 10px auto;
            }
            
        </style>
        
        
    </head>
    
    
    
    <body>
        
        <div class="productos"> 
            
            <script type="text/javascript">
                
                let codref = 0;
                
                for (var i = 1; i <= 100; i++) {
                    
                    codref = (++codref%9 == 0)?1:codref;
                    
                    if(i%2==0){
                        movida="flip-left";
                    }else{
                        movida="zoom-out-down";
                    }
                    
                    
                
                    let lispro=`
                        <div class="producto" data-aos="${movida}" data-aos-duration="1500">
                           producto ${i}
                           <img src="img/celular${codref}.png" alt=""/>
                           precio ${codref*3}
                        </div>`;
            
                    document.write(lispro);
                
                }
                
            
            </script>
            
            <script>
               AOS.init();
            </script>
            
            
        </div>
        
    </body>
    
    
    
</html>
