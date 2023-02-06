<?php

namespace App;

class BankHD extends BankModel
{
    public function tranfer($money)
    {
        if ($money <= 0) {
            throw new \Exception("Không thể chuyển tiền < 0!!");
        }
        echo "<br />bạn đã chuyển {$money}$ thành công.";
    }
    public function recharge($money)
    {
        echo "<br />Bạn vừa nạp {$money}$ vào tài khoản thành công";
    }
}
