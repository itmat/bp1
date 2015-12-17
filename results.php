<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta name="description" content="Benchmark Analysis of Algorithms for Determining and Quantifying Full-length mRNA Splice Forms from RNA-Seq Data" />

<meta name="keywords" content="RNA-Seq" />

<meta name="author" content="Katharina Hayer" />

<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

<title>BP1</title>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69093404-1', 'auto');
  ga('send', 'pageview');

</script>


</head>

<body>


<div id="wrapper">

<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>


<div id="content">

<h2>Results</h2>
<!--
Download pdf with all figures <a href="http://bp2.s3.amazonaws.com/hayer_all_figures.pdf">HERE</a>

<h2>Overview</h2>

<h3>DataSet T1</h3>

<table border="1">
<tbody>
<tr><th>DateSet T1</th>
<th id="alignment">Alingment</th>
<th id="alignment"> </th>
<th id="alignment"> </th>
<th id="alignment"> </th>
<th id="AlgorithmSettings">Algorithm Settings</th>
<th id="AlgorithmSettings"> </th>
<th id="Algorithms">Algorithms</th>
<th id="Algorithms"> </th>
<th id="Algorithms"> </th>
<th id="Algorithms"> </th>
<th id="Algorithms"> </th>
</tr>
<tr><th>Figure</th>
<th id="alignment">Truth</th>
<th id="alignment">TopHat2</th>
<th id="alignment">STAR</th>
<th id="alignment">With Gene Models</th>
<th id="AlgorithmSettings">With Gene Models</th>
<th id="AlgorithmSettings">Split output</th>
<th id="Algorithms">Augustus</th>
<th id="Algorithms">CLASS</th>
<th id="Algorithms">Cufflinks</th>
<th id="Algorithms">FlipFlop</th>
<th id="Algorithms">IReckon</th>
</tr>
<td>Ireckon</td>
</tr>
<tr><td>Figure 4 Left</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figure 4 Middle</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figure 4 Right</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figure S1 Left</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
</tr>
<tr><td>Figure S1 Midldle</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
</tr>
<tr><td>Figure S1 Right</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
</tr>
<tr><td>Figure S2 Left</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figure S2 Middle</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figure S2 Right</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figure S3 Left</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
</tr>
<tr><td>Figure S3 Middle</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
</tr>
<tr><td>Figure S3 Right</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
</tr>
<tr><td>Figure S4 Left</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figure S4 Middle</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figure S4 Right</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figure S5 Left</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
</tr>
<tr><td>Figure S5 Middle</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
</tr>
<tr><td>Figure S5 Right</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
</tr>
<tr><td>Figure S6 Left</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr><td>Figure S6 Middle</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr><td>Figure S6 Right</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr><td>Figure S14 Left</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figure S14 Middle</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figure S14 Right</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figure S15 Left</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figure S15 Middle</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figure S15 Right</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figure S16 Left</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figure S16 Middle</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figure S16 Right</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><th>DateSet T1</th>
<th id="Algorithms"> </th>
<th id="Algorithms"> </th>
<th id="Algorithms"> </th>
<th id="Algorithms"> </th>
<th id="Algorithms"> </th>
<th id="Algorithms"> </th>
<th id="Algorithms"> </th>
<th id="Dataset">SpliceEvent</th>
<th id="Dataset"> </th>
<th id="Dataset"> </th>
<th id="Dataset"> </th>
</tr>
<tr><th>Figures</th>
<th id="Algorithms" >Isolasso</th>
<th id="Algorithms">MiTie</th>
<th id="Algorithms">SOAP</th>
<th id="Algorithms">StringTie</th>
<th id="Algorithms">StringTie-SR</th>
<th id="Algorithms">Trans-ABySS</th>
<th id="Algorithms">Trinity</th>
<th id="Dataset">Different exon starts/ends</th>
<th id="Dataset">Skipped Exons</th>
<th id="Dataset">Truncation</th>
<th id="Dataset"> </td>
</tr>
<tr><td>Figure 4 Left</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr><td>Figure 4 Middle</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
</tr>
<tr><td>Figure 4 Right</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
</tr>
<tr><td>Figure S1 Left</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr><td>Figure S1 Midldle</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
</tr>
<tr><td>Figure S1 Right</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
</tr>
<tr><td>Figure S2 Left</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr><td>Figure S2 Middle</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
</tr>
<tr><td>Figure S2 Right</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
</tr>
<tr><td>Figure S3 Left</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr><td>Figure S3 Middle</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
</tr>
<tr><td>Figure S3 Right</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
</tr>
<tr><td>Figure S4 Left</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr><td>Figure S4 Middle</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
</tr>
<tr><td>Figure S4 Right</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
</tr>
<tr><td>Figure S5 Left</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr><td>Figure S5 Middle</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
</tr>
<tr><td>Figure S5 Right</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
</tr>
<tr><td>Figure S6 Left</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr><td>Figure S6 Middle</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
</tr>
<tr><td>Figure S6 Right</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
</tr>
<tr><td>Figure S14 Left</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr><td>Figure S14 Middle</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
</tr>
<tr><td>Figure S14 Right</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
</tr>
<tr><td>Figure S15 Left</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr><td>Figure S15 Middle</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
</tr>
<tr><td>Figure S15 Right</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
</tr>
<tr><td>Figure S16 Left</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr><td>Figure S16 Middle</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
</tr>
<tr><td>Figure S16 Right</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
</tr>
</tbody></table>


<h3>DataSets EP and ER</h3>

<table border="1">
<tbody><tr><th>EP and ER</th>
<th id="alignment">Alingment</th>
<th id="alignment"> </th>
<th id="alignment"> </th>
<th id="alignment"> </th>
<th id="AlgorithmSettings">Algorithm Settings</th>
<th id="AlgorithmSettings"> </th>
<th id="Algorithms">Algorithms</th>
<th id="Algorithms"> </th>
<th id="Algorithms"> </th>
<th id="Algorithms"> </th>
</tr>
<tr><th>Figure</th>
<th id="alignment">Truth</th>
<th id="alignment">TopHat2</th>
<th id="alignment">STAR</th>
<th id="alignment">With Gene Models</th>
<th id="AlgorithmSettings">With Gene Models</th>
<th id="AlgorithmSettings">Split output</th>
<th id="Algorithms">Augustus</th>
<th id="Algorithms">CLASS</th>
<th id="Algorithms">Cufflinks</th>
<th id="Algorithms">FlipFlop</th>
</tr>
<tr><td>Figure 5 Left</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figure 5 Right</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figure 7 Left</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figure 7 Middle</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figure 7 Right</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figure S7 Left</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figure S7 Right</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figure S8 Left</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figure S8 Right</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figure S9 Left</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figure S9 Right</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figure S10 Left</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figure S10 Right</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figure S11 Left</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figure S11 Right</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
</tr>
<tr><td>Figure S12 Left</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr><td>Figure S12 Right</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr><td>Figure S17 Left</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figure S17 Right</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figure S18 Left</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figure S18 Right</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figure S19 Left</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figure S19 Right</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><th>EP and ER</th>
<th id="Algorithms"> </th>
<th id="Algorithms"> </th>
<th id="Algorithms"> </th>
<th id="Algorithms"> </th>
<th id="Algorithms"> </th>
<th id="Algorithms"> </th>
<th id="Algorithms"> </th>
<th id="Algorithms"> </th>
<th id="Dataset">Dataset</th>
<th id="Dataset"> </th>
</tr>
<tr><th>Figures</th>
<th id="Algorithms">Ireckon</th>
<th id="Algorithms" >Isolasso</th>
<th id="Algorithms">MiTie</th>
<th id="Algorithms">SOAP</th>
<th id="Algorithms">StringTie</th>
<th id="Algorithms">StringTie-SR</th>
<th id="Algorithms">Trans-ABySS</th>
<th id="Algorithms">Trinity</th>
<th id="Dataset">EnsemblPerfect</th>
<th id="Dataset">EnsemblRealistic</th>
</tr>
<tr><td>Figure 5 Left</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
</tr>
<tr><td>Figure 5 Right</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
</tr>
<tr><td>Figure 7 Left</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
</tr>
<tr><td>Figure 7 Middle</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
</tr>
<tr><td>Figure 7 Right</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
</tr>
<tr><td>Figure S7 Left</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
</tr>
<tr><td>Figure S7 Right</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
</tr>
<tr><td>Figure S8 Left</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
</tr>
<tr><td>Figure S8 Right</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
</tr>
<tr><td>Figure S9 Left</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
</tr>
<tr><td>Figure S9 Right</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
</tr>
<tr><td>Figure S10 Left</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
</tr>
<tr><td>Figure S10 Right</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
</tr>
<tr><td>Figure S11 Left</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
</tr>
<tr><td>Figure S11 Right</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
</tr>
<tr><td>Figure S12 Left</td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
</tr>
<tr><td>Figure S12 Right</td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
</tr>
<tr><td>Figure S17 Left</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
</tr>
<tr><td>Figure S17 Right</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
</tr>
<tr><td>Figure S18 Left</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
</tr>
<tr><td>Figure S18 Right</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
</tr>
<tr><td>Figure S19 Left</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
  <td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
</tr>
<tr><td>Figure S19 Right</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
</tr>
</tbody></table>

<h3> IVT DataSet </h3>






<table border="1">
<tbody><tr><th>IVT</th>
<th id="alignment">Alingment</th>
<th id="alignment"> </th>
<th id="alignment"> </th>
<th id="alignment"> </th>
<th id="AlgorithmSettings">Algorithm Settings</th>
<th id="Algorithms">Algorithms</th>
<th id="Algorithms"> </th>
<th id="Algorithms"> </th>
<th id="Algorithms"> </th>
<th id="Algorithms"> </th>
</tr>
<tr><th>Figures</th>
<th id="alignment">Truth</th>
<th id="alignment">TopHat2</th>
<th id="alignment">STAR</th>
<th id="alignment">With Gene Models</th>
<th id="AlgorithmSettings">With Gene Models</th>
<th id="Algorithms">Augustus</th>
<th id="Algorithms">CLASS</th>
<th id="Algorithms">Cufflinks</th>
<th id="Algorithms">FlipFlop</th>
<th id="Algorithms">Ireckon</th>
</tr>
<tr><td>Figures 6 Left</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figures 6 Middle</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figures 6 Right</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
</tr>
<tr><td>Figures S13 Left</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
</tr>
<tr><td>Figures S13 Middle</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
</tr>
<tr><td>Figures S13 Right</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
</tr>
<tr><th>IVT</th>
<th id="Algorithms"> </th>
<th id="Algorithms"> </th>
<th id="Algorithms"> </th>
<th id="Algorithms"> </th>
<th id="Algorithms"> </th>
<th id="Algorithms"> </th>
<th id="Algorithms"> </th>
<th id="Dataset">Dataset</th>
<th id="Dataset"> </th>
<th id="Dataset"> </th>
</tr>
<tr><th>Figures</th>
<th id="Algorithms" >Isolasso</th>
<th id="Algorithms">MiTie</th>
<th id="Algorithms">SOAP</th>
<th id="Algorithms">StringTie</th>
<th id="Algorithms">StringTie-SR</th>
<th id="Algorithms">Trans-ABySS</th>
<th id="Algorithms">Trinity</th>
<th id="Dataset">PolyA</th>
<th id="Dataset">Ribo</th>
<th id="Dataset">Simulated</td>
</tr>
<tr><td>Figures 6 Left</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
</tr>
<tr><td>Figures 6 Middle</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
<td> </td>
</tr>
<tr><td>Figures 6 Right</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td>&#10004</td>
</tr>
<tr><td>Figures S13 Left</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
</tr>
<tr><td>Figures S13 Middle</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td> </td>
</tr>
<tr><td>Figures S13 Right</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td>&#10004</td>
<td>&#10004</td>
<td> </td>
<td> </td>
<td>&#10004</td>
</tr>
</tbody></table>
-->

</div> <!-- end #content -->


<?php include('includes/footer.php'); ?>

</div> <!-- End #wrapper -->

  </body>

</html>
