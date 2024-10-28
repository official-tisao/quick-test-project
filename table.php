<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.0.0/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/searchbuilder/1.8.1/css/searchBuilder.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.5.4/css/dataTables.dateTime.min.css"/>
    <!--
-->
</head>
<body>
<section>
    <table id="example" class="display nowrap" style="width:100%">
        <thead>
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start Date</th>
            <th>Salary</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td><span>Edinburgh</span></td>
            <td><span class="old">61</span></td>
            <td>2011-04-25</td>
            <td><span>$320,800.00</span></td>
        </tr>
        <tr>
            <td>Garrett Winters</td>
            <td>Accountant</td>
            <td><span>Tokyo</span></td>
            <td><span class="old">63</span></td>
            <td>2011-07-25</td>
            <td><span>$170,750.00</span></td>
        </tr>
        <tr>
            <td>Ashton Cox</td>
            <td>Junior Technical Author</td>
            <td><span>San Francisco</span></td>
            <td><span class="old">66</span></td>
            <td>2009-01-12</td>
            <td><span>$86,000.00</span></td>
        </tr>
        <tr>
            <td>Cedric Kelly</td>
            <td>Senior Javascript Developer</td>
            <td><span>Edinburgh</span></td>
            <td><span class="young">22</span></td>
            <td>2012-03-29</td>
            <td><span>$433,060.00</span></td>
        </tr>
        <tr>
            <td>Airi Satou</td>
            <td>Accountant</td>
            <td><span>Tokyo</span></td>
            <td><span class="young">33</span></td>
            <td>2008-11-28</td>
            <td><span>$162,700.00</span></td>
        </tr>
        <tr>
            <td>Brielle Williamson</td>
            <td>Integration Specialist</td>
            <td><span>New York</span></td>
            <td><span class="old">61</span></td>
            <td>2012-12-02</td>
            <td><span>$372,000.00</span></td>
        </tr>
        <tr>
            <td>Herrod Chandler</td>
            <td>Sales Assistant</td>
            <td><span>San Francisco</span></td>
            <td><span class="old">59</span></td>
            <td>2012-08-06</td>
            <td><span>$137,500.00</span></td>
        </tr>
        <tr>
            <td>Rhona Davidson</td>
            <td>Integration Specialist</td>
            <td><span>Tokyo</span></td>
            <td><span class="old">55</span></td>
            <td>2010-10-14</td>
            <td><span>$327,900.00</span></td>
        </tr>
        <tr>
            <td>Colleen Hurst</td>
            <td>Javascript Developer</td>
            <td><span>San Francisco</span></td>
            <td><span class="middleaged">39</span></td>
            <td>2009-09-15</td>
            <td><span>$205,500.00</span></td>
        </tr>
        <tr>
            <td>Sonya Frost</td>
            <td>Software Engineer</td>
            <td><span>Edinburgh</span></td>
            <td><span class="young">23</span></td>
            <td>2008-12-13</td>
            <td><span>$103,600.00</span></td>
        </tr>
        <tr>
            <td>Jena Gaines</td>
            <td>Office Manager</td>
            <td><span>London</span></td>
            <td><span class="young">30</span></td>
            <td>2008-12-19</td>
            <td><span>$90,560.00</span></td>
        </tr>
        <tr>
            <td>Quinn Flynn</td>
            <td>Support Lead</td>
            <td><span>Edinburgh</span></td>
            <td><span class="young">22</span></td>
            <td>2013-03-03</td>
            <td><span>$342,000.00</span></td>
        </tr>
        <tr>
            <td>Charde Marshall</td>
            <td>Regional Director</td>
            <td><span>San Francisco</span></td>
            <td><span class="middleaged">36</span></td>
            <td>2008-10-16</td>
            <td><span>$470,600.00</span></td>
        </tr>
        <tr>
            <td>Haley Kennedy</td>
            <td>Senior Marketing Designer</td>
            <td><span>London</span></td>
            <td><span class="middleaged">43</span></td>
            <td>2012-12-18</td>
            <td><span>$313,500.00</span></td>
        </tr>
        <tr>
            <td>Tatyana Fitzpatrick</td>
            <td>Regional Director</td>
            <td><span>London</span></td>
            <td><span class="young">19</span></td>
            <td>2010-03-17</td>
            <td><span>$385,750.00</span></td>
        </tr>
        <tr>
            <td>Michael Silva</td>
            <td>Marketing Designer</td>
            <td><span>London</span></td>
            <td><span class="old">66</span></td>
            <td>2012-11-27</td>
            <td><span>$198,500.00</span></td>
        </tr>
        <tr>
            <td>Paul Byrd</td>
            <td>Chief Financial Officer (CFO)</td>
            <td><span>New York</span></td>
            <td><span class="old">64</span></td>
            <td>2010-06-09</td>
            <td><span>$725,000.00</span></td>
        </tr>
        <tr>
            <td>Gloria Little</td>
            <td>Systems Administrator</td>
            <td><span>New York</span></td>
            <td><span class="old">59</span></td>
            <td>2009-04-10</td>
            <td><span>$237,500.00</span></td>
        </tr>
        <tr>
            <td>Bradley Greer</td>
            <td>Software Engineer</td>
            <td><span>London</span></td>
            <td><span class="middleaged">41</span></td>
            <td>2012-10-13</td>
            <td><span>$132,000.00</span></td>
        </tr>
        <tr>
            <td>Dai Rios</td>
            <td>Personnel Lead</td>
            <td><span>Edinburgh</span></td>
            <td><span class="middleaged">35</span></td>
            <td>2012-09-26</td>
            <td><span>$217,500.00</span></td>
        </tr>
        <tr>
            <td>Jenette Caldwell</td>
            <td>Development Lead</td>
            <td><span>New York</span></td>
            <td><span class="young">30</span></td>
            <td>2011-09-03</td>
            <td><span>$345,000.00</span></td>
        </tr>
        <tr>
            <td>Yuri Berry</td>
            <td>Chief Marketing Officer (CMO)</td>
            <td><span>New York</span></td>
            <td><span class="middleaged">40</span></td>
            <td>2009-06-25</td>
            <td><span>$675,000.00</span></td>
        </tr>
        <tr>
            <td>Caesar Vance</td>
            <td>Pre-Sales Support</td>
            <td><span>New York</span></td>
            <td><span class="young">21</span></td>
            <td>2011-12-12</td>
            <td><span>$106,450.00</span></td>
        </tr>
        <tr>
            <td>Doris Wilder</td>
            <td>Sales Assistant</td>
            <td><span>Sydney</span></td>
            <td><span class="young">23</span></td>
            <td>2010-09-20</td>
            <td><span>$85,600.00</span></td>
        </tr>
        <tr>
            <td>Angelica Ramos</td>
            <td>Chief Executive Officer (CEO)</td>
            <td><span>London</span></td>
            <td><span class="middleaged">47</span></td>
            <td>2009-10-09</td>
            <td><span>$1,200,000.00</span></td>
        </tr>
        <tr>
            <td>Gavin Joyce</td>
            <td>Developer</td>
            <td><span>Edinburgh</span></td>
            <td><span class="middleaged">42</span></td>
            <td>2010-12-22</td>
            <td><span>$92,575.00</span></td>
        </tr>
        <tr>
            <td>Jennifer Chang</td>
            <td>Regional Director</td>
            <td><span>Singapore</span></td>
            <td><span class="young">28</span></td>
            <td>2010-11-14</td>
            <td><span>$357,650.00</span></td>
        </tr>
        <tr>
            <td>Brenden Wagner</td>
            <td>Software Engineer</td>
            <td><span>San Francisco</span></td>
            <td><span class="young">28</span></td>
            <td>2011-06-07</td>
            <td><span>$206,850.00</span></td>
        </tr>
        <tr>
            <td>Fiona Green</td>
            <td>Chief Operating Officer (COO)</td>
            <td><span>San Francisco</span></td>
            <td><span class="middleaged">48</span></td>
            <td>2010-03-11</td>
            <td><span>$850,000.00</span></td>
        </tr>
        <tr>
            <td>Shou Itou</td>
            <td>Regional Marketing</td>
            <td><span>Tokyo</span></td>
            <td><span class="young">20</span></td>
            <td>2011-08-14</td>
            <td><span>$163,000.00</span></td>
        </tr>
        <tr>
            <td>Michelle House</td>
            <td>Integration Specialist</td>
            <td><span>Sydney</span></td>
            <td><span class="middleaged">37</span></td>
            <td>2011-06-02</td>
            <td><span>$95,400.00</span></td>
        </tr>
        <tr>
            <td>Suki Burks</td>
            <td>Developer</td>
            <td><span>London</span></td>
            <td><span class="middleaged">53</span></td>
            <td>2009-10-22</td>
            <td><span>$114,500.00</span></td>
        </tr>
        <tr>
            <td>Prescott Bartlett</td>
            <td>Technical Author</td>
            <td><span>London</span></td>
            <td><span class="young">27</span></td>
            <td>2011-05-07</td>
            <td><span>$145,000.00</span></td>
        </tr>
        <tr>
            <td>Gavin Cortez</td>
            <td>Team Leader</td>
            <td><span>San Francisco</span></td>
            <td><span class="young">22</span></td>
            <td>2008-10-26</td>
            <td><span>$235,500.00</span></td>
        </tr>
        <tr>
            <td>Martena Mccray</td>
            <td>Post-Sales support</td>
            <td><span>Edinburgh</span></td>
            <td><span class="middleaged">46</span></td>
            <td>2011-03-09</td>
            <td><span>$324,050.00</span></td>
        </tr>
        <tr>
            <td>Unity Butler</td>
            <td>Marketing Designer</td>
            <td><span>San Francisco</span></td>
            <td><span class="middleaged">47</span></td>
            <td>2009-12-09</td>
            <td><span>$85,675.00</span></td>
        </tr>
        <tr>
            <td>Howard Hatfield</td>
            <td>Office Manager</td>
            <td><span>San Francisco</span></td>
            <td><span class="middleaged">51</span></td>
            <td>2008-12-16</td>
            <td><span>$164,500.00</span></td>
        </tr>
        <tr>
            <td>Hope Fuentes</td>
            <td>Secretary</td>
            <td><span>San Francisco</span></td>
            <td><span class="middleaged">41</span></td>
            <td>2010-02-12</td>
            <td><span>$109,850.00</span></td>
        </tr>
        <tr>
            <td>Vivian Harrell</td>
            <td>Financial Controller</td>
            <td><span>San Francisco</span></td>
            <td><span class="old">62</span></td>
            <td>2009-02-14</td>
            <td><span>$452,500.00</span></td>
        </tr>
        <tr>
            <td>Timothy Mooney</td>
            <td>Office Manager</td>
            <td><span>London</span></td>
            <td><span class="middleaged">37</span></td>
            <td>2008-12-11</td>
            <td><span>$136,200.00</span></td>
        </tr>
        <tr>
            <td>Jackson Bradshaw</td>
            <td>Director</td>
            <td><span>New York</span></td>
            <td><span class="old">65</span></td>
            <td>2008-09-26</td>
            <td><span>$645,750.00</span></td>
        </tr>
        <tr>
            <td>Olivia Liang</td>
            <td>Support Engineer</td>
            <td><span>Singapore</span></td>
            <td><span class="old">64</span></td>
            <td>2011-02-03</td>
            <td><span>$234,500.00</span></td>
        </tr>
        <tr>
            <td>Bruno Nash</td>
            <td>Software Engineer</td>
            <td><span>London</span></td>
            <td><span class="middleaged">38</span></td>
            <td>2011-05-03</td>
            <td><span>$163,500.00</span></td>
        </tr>
        <tr>
            <td>Sakura Yamamoto</td>
            <td>Support Engineer</td>
            <td><span>Tokyo</span></td>
            <td><span class="middleaged">37</span></td>
            <td>2009-08-19</td>
            <td><span>$139,575.00</span></td>
        </tr>
        <tr>
            <td>Thor Walton</td>
            <td>Developer</td>
            <td><span>New York</span></td>
            <td><span class="old">61</span></td>
            <td>2013-08-11</td>
            <td><span>$98,540.00</span></td>
        </tr>
        <tr>
            <td>Finn Camacho</td>
            <td>Support Engineer</td>
            <td><span>San Francisco</span></td>
            <td><span class="middleaged">47</span></td>
            <td>2009-07-07</td>
            <td><span>$87,500.00</span></td>
        </tr>
        <tr>
            <td>Serge Baldwin</td>
            <td>Data Coordinator</td>
            <td><span>Singapore</span></td>
            <td><span class="old">64</span></td>
            <td>2012-04-09</td>
            <td><span>$138,575.00</span></td>
        </tr>
        <tr>
            <td>Zenaida Frank</td>
            <td>Software Engineer</td>
            <td><span>New York</span></td>
            <td><span class="old">63</span></td>
            <td>2010-01-04</td>
            <td><span>$125,250.00</span></td>
        </tr>
        <tr>
            <td>Zorita Serrano</td>
            <td>Software Engineer</td>
            <td><span>San Francisco</span></td>
            <td><span class="old">56</span></td>
            <td>2012-06-01</td>
            <td><span>$115,000.00</span></td>
        </tr>
        <tr>
            <td>Jennifer Acosta</td>
            <td>Junior Javascript Developer</td>
            <td><span>Edinburgh</span></td>
            <td><span class="middleaged">43</span></td>
            <td>2013-02-01</td>
            <td><span>$75,650.00</span></td>
        </tr>
        <tr>
            <td>Cara Stevens</td>
            <td>Sales Assistant</td>
            <td><span>New York</span></td>
            <td><span class="middleaged">46</span></td>
            <td>2011-12-06</td>
            <td><span>$145,600.00</span></td>
        </tr>
        <tr>
            <td>Hermione Butler</td>
            <td>Regional Director</td>
            <td><span>London</span></td>
            <td><span class="middleaged">47</span></td>
            <td>2011-03-21</td>
            <td><span>$356,250.00</span></td>
        </tr>
        <tr>
            <td>Lael Greer</td>
            <td>Systems Administrator</td>
            <td><span>London</span></td>
            <td><span class="young">21</span></td>
            <td>2009-02-27</td>
            <td><span>$103,500.00</span></td>
        </tr>
        <tr>
            <td>Jonas Alexander</td>
            <td>Developer</td>
            <td><span>San Francisco</span></td>
            <td><span class="young">30</span></td>
            <td>2010-07-14</td>
            <td><span>$86,500.00</span></td>
        </tr>
        <tr>
            <td>Shad Decker</td>
            <td>Regional Director</td>
            <td><span>Edinburgh</span></td>
            <td><span class="middleaged">51</span></td>
            <td>2008-11-13</td>
            <td><span>$183,000.00</span></td>
        </tr>
        <tr>
            <td>Michael Bruce</td>
            <td>Javascript Developer</td>
            <td><span>Singapore</span></td>
            <td><span class="young">29</span></td>
            <td>2011-06-27</td>
            <td><span>$183,000.00</span></td>
        </tr>
        <tr>
            <td>Donna Snider</td>
            <td>Customer Support</td>
            <td><span>New York</span></td>
            <td><span class="young">27</span></td>
            <td>2011-01-25</td>
            <td><span>$112,000.00</span></td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start Date</th>
            <th>Salary</th>
        </tr>
        </tfoot>
    </table>
</section>
<script crossorigin="anonymous" src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script crossorigin="anonymous" src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
<script crossorigin="anonymous" src="https://cdn.datatables.net/searchbuilder/1.8.1/js/dataTables.searchBuilder.js"></script>
<script crossorigin="anonymous" src="https://cdn.datatables.net/searchbuilder/1.8.1/js/searchBuilder.dataTables.js"></script>
<script crossorigin="anonymous" src="https://cdn.datatables.net/datetime/1.5.4/js/dataTables.dateTime.min.js"></script>
</body>
</html>