@foreach ($certificates as $certificate)
<p style="text-align: center;  font-size: 20px"><strong>&nbsp;MEDICAL CERTIFICATE</strong></p>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: right;">ID No: {{$certificate->id}}</p>
<p style="text-align: left;">&nbsp;</p>
<p style="text-align: left; padding-left: 40px; font-size: 20px">I, Giniginawat D. Makagalaw is a certified medical doctor and is</p>
<p style="text-align: left; padding-left: 40px;">&nbsp;</p>
<p style="text-align: left; padding-left: 40px; font-size: 20px">holding medical license number <span style="text-decoration: underline;">01042217</span> have examined {{$certificate->firstName}}  {{$certificate->lastName}}</p>
<p style="text-align: left; padding-left: 40px;">&nbsp;</p>
<p style="text-align: left; padding-left: 40px; font-size: 20px">and have found {{$certificate->firstName}}  {{$certificate->lastName}} free from the following disease</p>
<p style="text-align: left; padding-left: 40px;">&nbsp;</p>
<p style="padding-left: 40px; text-align: center; font-size: 20px"><strong>Coronavirus Disease - 2019 (COVID-19)</strong></p>
<p style="padding-left: 40px; text-align: center;">&nbsp;</p>
<p style="padding-left: 40px; text-align: left; font-size: 20px">In the past 14 days with evidence of negative testing for COVID-19 not more than 48 hours before departure</p>

<p style="padding-left: 40px; text-align: left;">&nbsp;</p>
<p style="padding-left: 40px; text-align: center; font-size: 20px"><strong><em>RT-PCR SARS CoV-2 Swab Test - NEGATIVE</em></strong></p>
<p style="padding-left: 40px; text-align: center;">&nbsp;</p>
<p style="padding-left: 40px; text-align: center;">&nbsp;</p>
<p style="padding-left: 40px; text-align: right;">&nbsp;</p>
<p style="padding-left: 40px; text-align: right;">&nbsp;</p>
<p style="padding-left: 40px; text-align: right;">&nbsp;</p>

<p style="padding-left: 40px; text-align: right; font-size: 20px"><strong><em>Signature: _____________ M.D.</em></strong></p>
<p style="text-align: left; padding-left: 40px;">&nbsp;</p>
<p style="text-align: left; padding-left: 40px;">&nbsp;</p>
<p style="text-align: left; padding-left: 40px;">&nbsp;</p>


@endforeach
