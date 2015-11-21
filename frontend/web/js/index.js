/**
 * Created by Виталий on 19.11.2015.
 */
var counter=0;
function getPrice(prod_price){

    if(counter===0){
        total= $("#product-pr_sum").val();
    }
    counter++;
    var count=$("#product-totalcount").val();

    $("#product-totalsum").val(count*prod_price);
    $("#product-pr_sum").val(total-count);
}
