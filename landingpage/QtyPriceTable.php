
<table id="QtyPriceTable" class="qty-price-box for-hide-show for-dancingScript-font">
    <tr>
        
        <th  colspan="2" class="for-padding">
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
                <!-- <input type="number" name="num" id="orderQuantity"> -->
                <input class="inputTagOfOrder for-dancingScript-font" id="inputTagOfOrder" value="1" type="number"
                    placeholder="enter quantity here" onkeydown="if(event.key==='.'){event.preventDefault();}"
                    oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');calculateAmount(event.target.value);">

                <!-- <input type="number" id="orderQuantity" > -->
            </td>
            <td class="for-padding ">
                R.s.<span id="totalAmt"></span>


            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div class="center">
                    <input type="submit" name="order" value="add in plate"  id="order-button">
                </div>
            </td>
        </tr>
    </table>