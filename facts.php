
<!DOCTYPE html>
<html>
<head>
<title>Facts</title>
</head>

<body>
<p>
<font style="font-size:18pt; padding-left:20px;"><a href="http://enviroclock.ddns.net/index.php">Home</a>&nbsp;&nbsp;<a href="http://enviroclock.ddns.net/facts.php">The Facts</a></font>
</p>

<div style="width: 600px; padding-left:20px; padding-bottom: 20px">
<h1>The facts</h1>
<p>A typical hardwood tree can absorb as much as 48 Pounds 21.7724 kg of carbon dioxide per year.</p>
<p>The American Meteorological Society’s State of the Climate in 2017 reports that in 2017, the ocean absorbed a net 2.6 billion tonnes of carbon from human activities, which is 36% higher than the 2005-2015 average.</p>
<p>At the end of 2015 it was estimated that there were 3 trillion trees left in the world and an estimated 10 billion more trees are cut down than are planted each year so lets say 2.95 trillion left.</p>
<p>At the end of 2019 it was estimated that 43.1 billion tons of carbon would be released into the atmosphere. The CSIRO has this figure now at 36.6 billion tonnes.</p>
<p>In 2019, emissions from fossil fuel sources – which represent roughly 90 percent of all emissions from human activities grew a projected 0.6 percent over 2018 emissions.</p>
<a href="https://www.csiro.au/en/News/News-releases/2019/Global-CO2-emissions-set-to-reach-all-time-high">https://www.csiro.au/en/News/News-releases/2019/Global-CO2-emissions-set-to-reach-all-time-high</a>
<p>
An IDLH (Immediately Dangerous to Life and Health) level is a gas level at which if you were to enter it, you would immediately die.<br />
The IDLH level for CO2 is 50,000 parts per million and current concentration is 410 parts per million or 3210000000000 tonnes. <br />
Now I am not sure how to calculate this correctly but I think this puts the IDLH at 391463414634146.3 tonnes (I think).
</p>
<p>
New Delhi has one of the highest readings of CO2, inside office buildings readings have been taken at 2000 parts per million. 
At 2000 parts per million of CO2 you can begin to experience symptoms such as headaches and dizzyness. 
At 5000 parts per million of CO2 you can begin to experience symptoms such as nausia and dissorentation.
</p>
<a href="https://www.livemint.com/mint-lounge/features/unseen-2019-living-in-a-carbon-dioxide-bubble-11577444957079.html">https://www.livemint.com/mint-lounge/features/unseen-2019-living-in-a-carbon-dioxide-bubble-11577444957079.html</a>
</div>

<div style="width: 600px; padding-left:20px; padding-bottom: 100px">
<h1>Calculating</h1>
<p>
If the earth were capable of absorbing all carbon then current levels would be zero and the trees would be dead, but there is a balance so we wont let them get below pre industrial levels 280ppm or 2192195121951.22 tonnes. 
For the sake of giving it all we have, our increase in pollution will be 0.6% on current levels, not the compounding level. So we will use $emitting += $emissions *= (1 + $emgrowth). 
I am not even going to account for the recent bushfires in Australia or Alaska etc but you can if you wish.
</p>
<p>
So, our equations for each year will be:<br />
<ol>
	<li>absorbtion = (treeabsorbtion * trees) + oceanabsorbtion</li>
	<li>remainder = emitting - absorbtion</li>
	<li>newconcentration += remainder</li>
</ol>
And then at the end of each year we will adjust the values for the next year.
<ol>
	<li>trees -= deforestation</li>
	<li>emitting += emissions *= (1 + emgrowth)</li>
</ol>

I can only write that in computer lingo so if someone can pass me it in proper maths i'd apreciate it.
</p>

<p>Now I might be wrong and lets hope I am because that seems a little too soon. As I said, im not a scientist so maybe theres a part of the equation im missing? 
I do know that some sites such as ran.org say that anywhere from 3.5 - 7 billion trees are cut down per year rather than 10 billion, you could try that data but im not sure how much it will help. 
Try setting deforestation to zero if you like or even a negative number to simulate humans reforesting instead of deforesting.</p>
<p>You can use the following form again to enter new data as much as you want. 
Please, feel free to fiddle with the figures till it say's what you want it to.</p>
</div>

</body>
</html>


