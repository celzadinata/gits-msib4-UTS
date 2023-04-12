$panjang = document.getElementById('count');
$temp = 0;
$count = 0;
const onBlur = ($id) => {
        $result = document.getElementById('result' + $id.charAt(6));
        $harga = document.getElementById('harga_temp' + $id.charAt(6));
        $sub_total = document.getElementById('sub_total' + $id.charAt(6));
        $qty = document.getElementById('qty' + $id.charAt(6));
        $payment = document.getElementById('payment');
        $total_harga = document.getElementById('total');
        $st = document.getElementById('st');
        $tt = document.getElementById('tt');

        $total = document.getElementById('total' + $id.charAt(6));
        $total_temp = parseInt($result.value) * parseInt($harga.innerHTML)
        $sub_total.value = $total_temp;
        $total.innerHTML = 'Rp ' + $total_temp.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

        for (let index = 0; index < $panjang.innerHTML; index++) {
            $sub_totall = document.getElementById('sub_total' + $count);
            if ($qty.value != $result.value) {
                $temp = parseInt($temp) + parseInt($sub_totall.value);
            }
            $count++;
        }
        $qty.value = $result.value;

        $count = 0;

        $payment.value = $temp;
        $total.value = $temp;
        $st.innerHTML = 'Rp ' + $temp.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        $tt.innerHTML = 'Rp ' + $temp.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        $temp = 0;
}
