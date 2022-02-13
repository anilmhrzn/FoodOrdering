<table id="QtyPriceTable" class="qty-price-box for-hide-show for-dancingScript-font">
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
                <p id="totalAmt"></p>


            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div class="center">
                    <input type="button" value="order" onclick="abc('<?php echo $row['name']?>');" id="order-button"
                        colspan="2"><i class="fas fa-times-circle icon-close" onclick="closeQtyPricePanel()"></i>
                    <script>
                    function closeQtyPricePanel() {
                        element = document.getElementById("QtyPriceTable");
                        element.style.display = "none";
                    }
                    // function abc() {
                    //     num = document.getElementById("QtyPriceTable");
                    //     console.log(num);
                    // }
                    </script>
                </div>
            </td>
        </tr>
    </table>