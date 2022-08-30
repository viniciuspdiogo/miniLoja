function InputInCart(product,button){

    const loadingIcon = document.getElementById('loading-icon');
    button.classList.add('disabled');

    let Promisse = new Promise(
       
       function(resolve,reject){
          
          loadingIcon.classList.remove('fa-solid', 'fa-cart-arrow-down');
          loadingIcon.classList.add('spinner-border' ,'spinner-border-sm');
          
          let newItem = true;
 
          let ArrayProduct = new Array();
          
          if(localStorage.hasOwnProperty('cartProduct')){
 
             ArrayProduct = JSON.parse(localStorage.getItem('cartProduct'));
             
             ArrayProduct.map((element,index) => {
                if(element.id == product[0].id){
                   ArrayProduct[index].quant +=1; 
                   newItem = false;                
                }
             });
             

             if(newItem){
                ArrayProduct.push({
                   'id': product[0].id,
                   'name': product[0].name,
                   'price': product[0].price,
                   'quant' : 1,
                   "image" : product[0].image
                });
             }
 
             localStorage.setItem('cartProduct', JSON.stringify(ArrayProduct));
 
 
             window.setTimeout(
                function(){
                   resolve();
             }, 1000);
 
          }else{
 
             ArrayProduct.push({
                'id': product[0].id,
                'name': product[0].name,
                'price': product[0].price,
                'quant' : 1,
                "image" : product[0].image
             });
 
 
             localStorage.setItem('cartProduct', JSON.stringify(ArrayProduct));
 
             window.setTimeout(
                function(){
                   resolve();
             }, 1000);
          }
          
       });
 
    Promisse.then(
       function(){
          
          loadingIcon.classList.remove('spinner-border' ,'spinner-border-sm');
          loadingIcon.classList.add('fa-solid', 'fa-check');     
          
 
          setTimeout(function(){
 
             loadingIcon.classList.remove('fa-solid', 'fa-check');  
             loadingIcon.classList.add('fa-solid', 'fa-cart-arrow-down');
               
             button.classList.remove('disabled');
          },3000);
       }
    );
 };
 