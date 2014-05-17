<?php
class Donation
{
    private $name;
    private $amount;

    static $totalDonated = 0;
    static $numberOfDonors = 0;

    function info()
    {
        $share = 100 * $this->amount / Donation::$totalDonated;
        return "{$this->name} donated {$this->amount} ($share)";
    }

    function __construct($nameOfDonor, $donation)
    {
        $this->name = $nameOfDonor;
        $this->amount = $donation;

        Donation::$totalDonated = Donation::$totalDonated + $donation;
        Donation::$numberOfDonors++;
    }

    function __destruct()
    {
        Donation::$totalDonated = Donation::$totalDonated - $donation;
        Donation::$numberOfDonors--;
    }

}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
                      "http://www.w3.org/TR/html401/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <title>Using Donation</title>
</head>
<body>
<pre>
<?php
    $donors = array(
        new Donation("Nicholas", 85.00),
        new Donation("Matt", 50.00),
        new Donation("Emily", 90.00),
        new Donation("Sally", 65.00));

    foreach ($donors as $donor)
        print $donor->info() . "\n";

    $total = Donation::$totalDonated;
    $count = Donation::$numberOfDonors;
    print "Total Donations  = {$total}\n";
    print "Number of Donors = {$count}\n";

?>
</pre>
</body>
</html>
