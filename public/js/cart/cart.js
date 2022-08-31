window.onload = function(){

    const boxItems = document.getElementById('produtos');

    let itemsCartStorage = JSON.parse(localStorage.getItem('cartProduct'));
        if(itemsCartStorage){
            itemsCartStorage.map((currentElement,index) => {
                let itemsInHtml = 
                `<div class="row bg-light border p-4 mb-3" id="product_${index}">
                    <div class="col-sm-3">
                        <img src="${currentElement.image}" alt="" class="w-100">
                    </div>
                    <div class="col-sm-9 ">
                    <div class="row gap-2">
                        <span class="fs-1 fw-bold">${currentElement.name}</span>
                        <span class="fs-3">${currentElement.price.toLocaleString("pt-BR", { minimumFractionDigits: 2 , style: 'currency', currency: 'BRL' })}</span>
                        <div class="d-flex">
                        <label class="fs-5 ">Quant.</label>
                        <input class="form-control ms-2" id="quant" type="number" value="${currentElement.quant}" step="1" min="1" max="100" class="border" style="width: 80px" onchange="changeQuant(${index})">
                        </div>
                        <div class="col-sm-3">
                        <button type="button" class="btn btn-danger" onclick="removeItemOnCart(${index})">Remover</button>
                        </div>
                    </div>
                    </div>
                </div>`;

                boxItems.innerHTML += itemsInHtml;
                SaveProductsCart(itemsCartStorage)
                CalcTotalValue(itemsCartStorage);
            });
        }else{
            document.getElementById('conteudo').innerHTML = `
            <div class="alert alert-danger" >
                Carrinho está vazio
            </div>`;
        }

            
}

function removeItemOnCart(index){
    
    let arrayProduct = JSON.parse(localStorage.getItem('cartProduct'));
    arrayProduct.splice(index,1);
    
    if(arrayProduct.length == 0){
        localStorage.removeItem('cartProduct');
        document.location.reload(true);
    }else{
        localStorage.setItem('cartProduct',JSON.stringify(arrayProduct));
    }
    
    
    const itemRemove = document.getElementById(`product_${index}`);
    itemRemove.remove();

    SaveProductsCart(arrayProduct);
    CalcTotalValue(arrayProduct);
}

function changeQuant(index){
    
  let value = parseInt(document.getElementById('quant').value);
  const indexProduct = index;
  if(value > 0){
    let arrayProduct = JSON.parse(localStorage.getItem('cartProduct'));
    arrayProduct[index].quant = parseInt(value);
    localStorage.setItem('cartProduct',JSON.stringify(arrayProduct));

    SaveProductsCart(arrayProduct);
    CalcTotalValue(arrayProduct);
  }
}

function CalcTotalValue(products){
    let totalValue = 0;
    products.map(item => {
        totalValue += item.price * item.quant;
    });
    totalValue = totalValue.toLocaleString("pt-BR", { minimumFractionDigits: 2 , style: 'currency', currency: 'BRL' });
    
    document.getElementById('showValue').innerText = totalValue;
}

function SaveProductsCart(products){
    document.getElementById('product').value = JSON.stringify(products);
}

