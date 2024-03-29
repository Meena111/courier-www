<table width="100%">
   <tbody>
      <tr>
         <td valign="middle">

            @php

             $titleExplode = explode(". ", $customer->name, 2);

             if(sizeof($titleExplode) == 2){
                 $title = $titleExplode[0];
                 $nameRest = $titleExplode[1];
             }else{
                 $title = "";
                 $nameRest = $titleExplode[0];
             }

             @endphp

         <p><strong>Dear {{$nameRest}},</strong></p>

         <p>Please note that  INR {{abs($amount)}} has been
            @if($amount > 0)
                added to
            @elseif($amount < 0)
                deducted from
            @endif
             your Shoppre wallet.</p>
        <p><strong>Reason:</strong> {{$description}}</p>
        <p>Click <a href="{{route('customer.wallet.trans')}}">here</a> to view your Shoppre Wallet history.</p>
        <p>Happy Shoppre-ing!</p>
        <p>Questions? <a href="{{route('faq')}}">Visit our FAQ page</a> for expert advice and answers to your questions.</p>
        <p>
            Best regards,
            <br>
            Your Team at Shoppre
            <br><br>
            Note:This is a system alert message. Please do not reply to this email
            <br>
        <p>
            <a href="tel:+91 80 4049 4077">+91 80 4049 4077</a> | <a href="mailto:support@shoppre.com">support@shoppre.com</a> | <a href="https://www.google.co.in/maps/place/Shoppre.com+-+Your+Global+Shipping+Partner/@12.925805,77.6332563,17z/data=!3m1!4b1!4m5!3m4!1s0x3bae146191401f95:0x1cf2770c1532d7d1!8m2!3d12.9257998!4d77.635445"> #181, 1st Floor, 2nd Cross Rd, 1st Block Koramangala, Bengaluru, Karnataka 560034</a>
            </p>
         </p>
         </td>
      </tr>
   </tbody>
</table>
