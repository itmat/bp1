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

<h2>Introduction</h2>

<p>
  TODO
  This project holds the links to the datasets, software and code
  that was used for our second benchmarking project:
</p>

<h3>TODO Benchmark Analysis of Algorithms for Determining and Quantifying
  Full-length mRNA Splice Forms from RNA-Seq Data</h3>

<h4>Abstract: </h4>

<!--
<p>The advantages of RNA sequencing (RNA-Seq) suggest it will replace microarrays
  for highly parallel gene expression analysis. For example, in contrast to arrays,
  RNA-Seq is expected to be able to provide accurate identification and quantification
  of full-length transcripts. A number of methods have been developed for this purpose,
  but short error prone reads makes it a difficult problem in practice.
  It is essential to determine which algorithms perform best, and where and why they
  fail. However, there is a dearth of independent and unbiased benchmarking studies of
  these algorithms. Here we take an approach using both simulated and experimental
  benchmark data to evaluate their accuracy. We conclude that most methods are inaccurate
  even using idealized data, and that no method is sufficiently accurate once
  complicating factors such as polymorphisms, intron signal, sequencing error, and
  multiple splice forms are present. These results point to the pressing need for
  further algorithm development. </p>
-->
TODO <br>
<b>Motivation:</b> Because of the advantages of RNA sequencing (RNA-Seq) over microarrays, it is gaining widespread popularity for highly parallel gene expression analysis. For example, RNA-Seq is expected to be able to provide accurate identification and quantification of full-length splice forms. A number of informatics packages have been developed for this purpose, but short reads makes it a difficult problem in principle.  Sequencing error and polymorphisms add further complications. It has become necessary to perform studies to determine which algorithms perform best and which if any algorithms perform adequately.   However, there is a dearth of independent and unbiased benchmarking studies. Here we take an approach using both simulated and experimental benchmark data to evaluate their accuracy.
<br>
<b>Results:</b> We conclude that most methods are inaccurate even using idealized data, and that no method is highly accurate once multiple splice forms, polymorphisms, intron signal, sequencing errors, alignment errors, annotation errors, and other complicating factors are present. These results point to the pressing need for further algorithm development.
<br>
<br>
<b>Authors:</b> Giacomo Baruzzo, Katharina E Hayer, Eun Ji Kim, Barbara Di Camillo and Gregory R Grant

<h4>WILL THERE BE A PREPRINT? Preprint is available at <a href="http://biorxiv.org/content/early/2014/07/14/007088">bioRxiv</a>.</h4>

</div> <!-- end #content -->

<?php include('includes/footer.php'); ?>

</div> <!-- End #wrapper -->

  </body>

</html>
