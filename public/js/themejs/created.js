function cartIncrease(prod_id)
{
    $.ajax({
        url:"/cart_product_increase",
        type: "post",
        data:{
            "_token": $('meta[name="csrf-token"]').attr('content'),
            "prod":prod_id,
        },
        success:function(response)
        {
            if(response.status == "false")
            {
                addProductNotice(
                    'You must login to increase the product quantity in your cart', 
                    '', '', 
                    'success'
                    );
            }
            else if(response.status == "true")
            {
                window.location.reload();
                addProductNotice(
                    'The product has been removed from your wishlist!', 
                    '', '', 
                    'success'
                    );
            }
            console.log(response);
        }
    });
}
function wishAdd(prod_id)
{
    $.ajax({
        url:"/add_to_wishlist",
        type: "post",
        data:{
            "_token": $('meta[name="csrf-token"]').attr('content'),
            "prod":prod_id,
        },
        success:function(response)
        {
            if(response.status == "false")
            {
                addProductNotice(
                    'You must login to add the product to your wishlist', 
                    '', '', 
                    'success'
                    );
            }
            else if(response.status == "true")
            {
                addProductNotice(
                    'The product has been added to your wishlist!', 
                    '', '', 
                    'success'
                    );
            }
            else if(response.status == "exist")
            {
                addProductNotice(
                    'The product already exists in your wishlist!', 
                    '', '', 
                    'success'
                    );
            }
            console.log(response);
        }
    });   
}
function cartAdd(prod_id)
{
    $.ajax({
        url:"/add_to_cart",
        type: "post",
        data:{
            "_token": $('meta[name="csrf-token"]').attr('content'),
            "prod":prod_id,
        },
        success:function(response)
        {
            if(response.status == "false")
            {
                addProductNotice(
                    'You must login to add the product to your cart', 
                    '', '', 
                    'success'
                    );
            }
            else if(response.status == "true")
            {
                addProductNotice(
                    'The product has been added to your cart!', 
                    '', '', 
                    'success'
                    );
            }
            else if(response.status == "exist")
            {
                addProductNotice(
                    'The product already exists in your shopping cart!', 
                    '', '', 
                    'success'
                    );
            }
            console.log(response.status);
        }
    });  
}
function wishRemove(prod_id)
{
    $.ajax({
        url:"/remove_wish",
        type: "post",
        data:{
            "_token": $('meta[name="csrf-token"]').attr('content'),
            "prod":prod_id,
        },
        success:function(response)
        {
            if(response.status == "false")
            {
                addProductNotice(
                    'You must login to remove the product from your wishlist', 
                    '', '', 
                    'success'
                    );
            }
            else if(response.status == "true")
            {
                window.location.reload();
                addProductNotice(
                    'The product has been removed from your wishlist!', 
                    '', '', 
                    'success'
                    );
            }
            console.log(response);
        }
    });
}
function cartRemove(prod_id)
{
    $.ajax({
        url:"/remove_from_cart",
        type: "post",
        data:{
            "_token": $('meta[name="csrf-token"]').attr('content'),
            "prod":prod_id,
        },
        success:function(response)
        {
            if(response.status == "false")
            {
                addProductNotice(
                    'You must login to remove the product from your shopping cart', 
                    '', '', 
                    'success'
                    );
            }
            else if(response.status == "true")
            {
                window.location.reload();
                addProductNotice(
                    'The product has been removed from your shopping cart!', 
                    '', '', 
                    'success'
                    );
            }
            console.log(response);
        }
    });
}
function addProductNotice(title, thumb, text, type) {
    $.jGrowl.defaults.closer = false;
    //Stop jGrowl
    //$.jGrowl.defaults.sticky = true;
    var tpl = thumb + '<h3>'+text+'</h3>';
    $.jGrowl(tpl, {		
        life: 4000,
        header: title,
        speed: 'slow',
        theme: type
    });
}
