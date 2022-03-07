<form action="placeOrder.php" method="POST">
    <table id="QtyPriceTable" class="qty-price-box for-hide-show for-dancingScript-font">
        <tr>
            <th>
                <input type="hidden" class="forOrderedFoodId" name="orderedFoodId">
                <input class="inputTagOfOrder forQtyTableName" name="nameOfFood" type="text">
            </th>
            <th class="for-padding">
                <div class="center">
                    <i class="fas fa-times-circle icon-close" onclick="closeQtyPricePanel();"></i>
                </div>
            </th>
        </tr>
        <tr>
            <th class="for-padding">quantity</th>
            <th class="for-padding">price</th>
        </tr>
        <tr>
            <td class="for-padding center">
                <input class="inputTagOfOrder for-dancingScript-font" id="inputTagOfOrder" name="quantity" value="1"
                    type="number" placeholder="enter quantity here"
                    onkeydown="if(event.key==='.'){event.preventDefault();}"
                    oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');calculateAmount(event.target.value);">

            </td>
            <td class="for-padding ">
                R.s.<input type="number" id="totalAmt" name="totalAmt">


            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div class="center">
                    <input type="submit" name="order" value="add in plate" id="order-button" onclick="forOrderPage();">
                </div>
            </td>
        </tr>
    </table>
</form>