<table class="qty-price-box">
            <tr>
                <th class="for-padding">quantity</th>
                <th class="for-padding">price</th>
            </tr>
            <tr>
                <td class="for-padding center">
                    <!-- <input type="number" name="num" id="orderQuantity"> -->
                    <input class="inputTagOfOrder" type="number"  placeholder="enter quantity here" onkeydown="if(event.key==='.'){event.preventDefault();}"
                        oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');calculateAmount(event.target.value,<?php echo $row['price']?>);">

                    <!-- <input type="number" id="orderQuantity" > -->
                </td>
                <td class="for-padding ">
                    <p class="totalAmt"></p>
                    

                </td>
            </tr>
            <tr>
                <td colspan="2" >
                    <div class="center">


                        <input type="button" value="order" onclick="abc();" id="order-button" colspan="2">
                        <script>
                        function abc() {
                            num = document.getElementById("orderQuantity").value;
                            console.log(num);
                        }
                        </script>
                    </div>
                </td>
            </tr>
        </table>