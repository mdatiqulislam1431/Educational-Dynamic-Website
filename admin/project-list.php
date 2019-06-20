    <?php include "inc/header_top.php"; ?>
    <?php include "inc/mobile_menu.php"; ?>
    <!-- Breadcome start-->
    <div class="breadcome-area mg-b-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                        <div class="breadcome-heading">
                            <h2>Project List</h2>
                        </div>
                        <ul class="breadcome-menu">
                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                            </li>
                            <li><a href="#">Graphs</a> <span class="bread-slash">/</span>
                            </li>
                            <li><span class="bread-blod">Project List</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcome End-->
    <!-- stockprice, feed area end-->
    <div class="admin-dashone-data-table-area mg-b-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline8-list shadow-reset">
                        <div class="sparkline8-hd">
                            <div class="main-sparkline8-hd">
                                <h1>Project List</h1>
                                <div class="sparkline8-outline-icon">
                                    <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                    <span><i class="fa fa-wrench"></i></span>
                                    <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="sparkline8-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <div id="toolbar">
                                    <select class="form-control">
                                        <option value="">Export Basic</option>
                                        <option value="all">Export All</option>
                                        <option value="selected">Export Selected</option>
                                    </select>
                                </div>
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                        <tr>
                                            <th data-field="state" data-checkbox="true"></th>
                                            <th data-field="id">ID</th>
                                            <th data-field="status">Status</th>
                                            <th data-field="name" data-editable="true">Project</th>
                                            <th data-field="company" data-editable="true">Company</th>
                                            <th data-field="complete">Completed</th>
                                            <th data-field="task" data-editable="true">Task</th>
                                            <th data-field="date" data-editable="true">Date</th>
                                            <th data-field="support">Participants</th>
                                            <th data-field="action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>1</td>
                                            <td>
                                                <div class="btn-group project-list-ad">
                                                    <button class="btn btn-white btn-xs">Active</button>
                                                </div>
                                            </td>
                                            <td>Web Development</td>
                                            <td>Aber Ltd.</td>
                                            <td class="datatable-ct"><span class="pie">1/6</span>
                                            </td>
                                            <td>10%</td>
                                            <td>Jul 14, 2018</td>
                                            <td>
                                                <div class="support-list-img">
                                                    <a href="#"><img src="img/notification/1.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/2.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/3.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/4.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/5.jpg" alt="" />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group project-list-action">
                                                    <button class="btn btn-white btn-action btn-xs"><i class="fa fa-folder"></i> View</button>
                                                    <button class="btn btn-white btn-xs"><i class="fa fa-pencil"></i> Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>2</td>
                                            <td>
                                                <div class="btn-group project-list-ad">
                                                    <button class="btn btn-white btn-xs">Active</button>
                                                </div>
                                            </td>
                                            <td>Graphic Design</td>
                                            <td>Abitibi Inc.</td>
                                            <td class="datatable-ct"><span class="pie">230/360</span>
                                            </td>
                                            <td>70%</td>
                                            <td>fab 2, 2018</td>
                                            <td>
                                                <div class="support-list-img">
                                                    <a href="#"><img src="img/notification/1.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/2.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/3.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/4.jpg" alt="" />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group project-list-action">
                                                    <button class="btn btn-white btn-action btn-xs"><i class="fa fa-folder"></i> View</button>
                                                    <button class="btn btn-white btn-xs"><i class="fa fa-pencil"></i> Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>3</td>
                                            <td>
                                                <div class="btn-group project-list-ad-bl">
                                                    <button class="btn btn-white btn-xs">Pending</button>
                                                </div>
                                            </td>
                                            <td>Software Development</td>
                                            <td>Acambis plc</td>
                                            <td class="datatable-ct"><span class="pie">0.42/1.461</span>
                                            </td>
                                            <td>0%</td>
                                            <td>Seb 5, 2018</td>
                                            <td>
                                                <div class="support-list-img">
                                                    <a href="#"><img src="img/notification/6.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/5.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/3.jpg" alt="" />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group project-list-action">
                                                    <button class="btn btn-white btn-action btn-xs"><i class="fa fa-folder"></i> View</button>
                                                    <button class="btn btn-white btn-xs"><i class="fa fa-pencil"></i> Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>4</td>
                                            <td>
                                                <div class="btn-group project-list-ad">
                                                    <button class="btn btn-white btn-xs">Active</button>
                                                </div>
                                            </td>
                                            <td>Woocommerce</td>
                                            <td>ACLN Ltd.</td>
                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                            </td>
                                            <td>15%</td>
                                            <td>Oct 10, 2018</td>
                                            <td>
                                                <div class="support-list-img">
                                                    <a href="#"><img src="img/notification/1.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/2.jpg" alt="" />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group project-list-action">
                                                    <button class="btn btn-white btn-action btn-xs"><i class="fa fa-folder"></i> View</button>
                                                    <button class="btn btn-white btn-xs"><i class="fa fa-pencil"></i> Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>5</td>
                                            <td>
                                                <div class="btn-group project-list-ad">
                                                    <button class="btn btn-white btn-xs">Active</button>
                                                </div>
                                            </td>
                                            <td>Joomla</td>
                                            <td>ACS-Tech Ltd.</td>
                                            <td class="datatable-ct"><span class="pie">200,133</span>
                                            </td>
                                            <td>80%</td>
                                            <td>Nov 20, 2018</td>
                                            <td>
                                                <div class="support-list-img">
                                                    <a href="#"><img src="img/notification/5.jpg" alt="" />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group project-list-action">
                                                    <button class="btn btn-white btn-action btn-xs"><i class="fa fa-folder"></i> View</button>
                                                    <button class="btn btn-white btn-xs"><i class="fa fa-pencil"></i> Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>6</td>
                                            <td>
                                                <div class="btn-group project-list-ad-rd">
                                                    <button class="btn btn-white btn-xs">Unactive</button>
                                                </div>
                                            </td>
                                            <td>Wordpress</td>
                                            <td>ActFits.com Inc.</td>
                                            <td class="datatable-ct"><span class="pie">0.42,1.051</span>
                                            </td>
                                            <td>0%</td>
                                            <td>Aug 25, 2018</td>
                                            <td>
                                                <div class="support-list-img">
                                                    <a href="#"><img src="img/notification/4.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/5.jpg" alt="" />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group project-list-action">
                                                    <button class="btn btn-white btn-action btn-xs"><i class="fa fa-folder"></i> View</button>
                                                    <button class="btn btn-white btn-xs"><i class="fa fa-pencil"></i> Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>7</td>
                                            <td>
                                                <div class="btn-group project-list-ad">
                                                    <button class="btn btn-white btn-xs">Active</button>
                                                </div>
                                            </td>
                                            <td>Ecommerce</td>
                                            <td>ActivCard S.A.</td>
                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                            </td>
                                            <td>15%</td>
                                            <td>July 17, 2018</td>
                                            <td>
                                                <div class="support-list-img">
                                                    <a href="#"><img src="img/notification/1.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/2.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/3.jpg" alt="" />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group project-list-action">
                                                    <button class="btn btn-white btn-action btn-xs"><i class="fa fa-folder"></i> View</button>
                                                    <button class="btn btn-white btn-xs"><i class="fa fa-pencil"></i> Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>8</td>
                                            <td>
                                                <div class="btn-group project-list-ad">
                                                    <button class="btn btn-white btn-xs">Active</button>
                                                </div>
                                            </td>
                                            <td>Android Apps</td>
                                            <td>Adecco S.A.</td>
                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                            </td>
                                            <td>15%</td>
                                            <td>June 11, 2018</td>
                                            <td>
                                                <div class="support-list-img">
                                                    <a href="#"><img src="img/notification/6.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/2.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/3.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/4.jpg" alt="" />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group project-list-action">
                                                    <button class="btn btn-white btn-action btn-xs"><i class="fa fa-folder"></i> View</button>
                                                    <button class="btn btn-white btn-xs"><i class="fa fa-pencil"></i> Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>9</td>
                                            <td>
                                                <div class="btn-group project-list-ad">
                                                    <button class="btn btn-white btn-xs">Active</button>
                                                </div>
                                            </td>
                                            <td>Prestashop</td>
                                            <td>AEGON N.V.</td>
                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                            </td>
                                            <td>15%</td>
                                            <td>May 9, 2018</td>
                                            <td>
                                                <div class="support-list-img">
                                                    <a href="#"><img src="img/notification/6.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/2.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/3.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/4.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/5.jpg" alt="" />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group project-list-action">
                                                    <button class="btn btn-white btn-action btn-xs"><i class="fa fa-folder"></i> View</button>
                                                    <button class="btn btn-white btn-xs"><i class="fa fa-pencil"></i> Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>10</td>
                                            <td>
                                                <div class="btn-group project-list-ad-bl">
                                                    <button class="btn btn-white btn-xs">Pending</button>
                                                </div>
                                            </td>
                                            <td>Game Development</td>
                                            <td>Aerco Ltd.</td>
                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                            </td>
                                            <td>0%</td>
                                            <td>April 5, 2018</td>
                                            <td>
                                                <div class="support-list-img">
                                                    <a href="#"><img src="img/notification/4.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/5.jpg" alt="" />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group project-list-action">
                                                    <button class="btn btn-white btn-action btn-xs"><i class="fa fa-folder"></i> View</button>
                                                    <button class="btn btn-white btn-xs"><i class="fa fa-pencil"></i> Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>11</td>
                                            <td>
                                                <div class="btn-group project-list-ad">
                                                    <button class="btn btn-white btn-xs">Active</button>
                                                </div>
                                            </td>
                                            <td>Angular Js</td>
                                            <td>Agrium Inc.</td>
                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                            </td>
                                            <td>15%</td>
                                            <td>Dec 1, 2018</td>
                                            <td>
                                                <div class="support-list-img">
                                                    <a href="#"><img src="img/notification/6.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/5.jpg" alt="" />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group project-list-action">
                                                    <button class="btn btn-white btn-action btn-xs"><i class="fa fa-folder"></i> View</button>
                                                    <button class="btn btn-white btn-xs"><i class="fa fa-pencil"></i> Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>12</td>
                                            <td>
                                                <div class="btn-group project-list-ad">
                                                    <button class="btn btn-white btn-xs">Active</button>
                                                </div>
                                            </td>
                                            <td>Opencart</td>
                                            <td>Air Canada</td>
                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                            </td>
                                            <td>15%</td>
                                            <td>Jan 6, 2018</td>
                                            <td>
                                                <div class="support-list-img">
                                                    <a href="#"><img src="img/notification/3.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/4.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/5.jpg" alt="" />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group project-list-action">
                                                    <button class="btn btn-white btn-action btn-xs"><i class="fa fa-folder"></i> View</button>
                                                    <button class="btn btn-white btn-xs"><i class="fa fa-pencil"></i> Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>13</td>
                                            <td>
                                                <div class="btn-group project-list-ad-rd">
                                                    <button class="btn btn-white btn-xs">Unactive</button>
                                                </div>
                                            </td>
                                            <td>Education</td>
                                            <td>Alcan Inc.</td>
                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                            </td>
                                            <td>0%</td>
                                            <td>Feb 6, 2016</td>
                                            <td>
                                                <div class="support-list-img">
                                                    <a href="#"><img src="img/notification/6.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/2.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/3.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/4.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/5.jpg" alt="" />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group project-list-action">
                                                    <button class="btn btn-white btn-action btn-xs"><i class="fa fa-folder"></i> View</button>
                                                    <button class="btn btn-white btn-xs"><i class="fa fa-pencil"></i> Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>14</td>
                                            <td>
                                                <div class="btn-group project-list-ad">
                                                    <button class="btn btn-white btn-xs">Active</button>
                                                </div>
                                            </td>
                                            <td>Construction</td>
                                            <td>Alcatel</td>
                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                            </td>
                                            <td>15%</td>
                                            <td>Jan 6, 2016</td>
                                            <td>
                                                <div class="support-list-img">
                                                    <a href="#"><img src="img/notification/6.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/4.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/5.jpg" alt="" />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group project-list-action">
                                                    <button class="btn btn-white btn-action btn-xs"><i class="fa fa-folder"></i> View</button>
                                                    <button class="btn btn-white btn-xs"><i class="fa fa-pencil"></i> Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>15</td>
                                            <td>
                                                <div class="btn-group project-list-ad">
                                                    <button class="btn btn-white btn-xs">Active</button>
                                                </div>
                                            </td>
                                            <td>Real Estate</td>
                                            <td>Alstom</td>
                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                            </td>
                                            <td>15%</td>
                                            <td>Dec 1, 2016</td>
                                            <td>
                                                <div class="support-list-img">
                                                    <a href="#"><img src="img/notification/5.jpg" alt="" />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group project-list-action">
                                                    <button class="btn btn-white btn-action btn-xs"><i class="fa fa-folder"></i> View</button>
                                                    <button class="btn btn-white btn-xs"><i class="fa fa-pencil"></i> Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>16</td>
                                            <td>
                                                <div class="btn-group project-list-ad">
                                                    <button class="btn btn-white btn-xs">Active</button>
                                                </div>
                                            </td>
                                            <td>Personal Regume</td>
                                            <td>Altarex Corp.</td>
                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                            </td>
                                            <td>15%</td>
                                            <td>May 9, 2016</td>
                                            <td>
                                                <div class="support-list-img">
                                                    <a href="#"><img src="img/notification/4.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/5.jpg" alt="" />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group project-list-action">
                                                    <button class="btn btn-white btn-action btn-xs"><i class="fa fa-folder"></i> View</button>
                                                    <button class="btn btn-white btn-xs"><i class="fa fa-pencil"></i> Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>17</td>
                                            <td>
                                                <div class="btn-group project-list-ad">
                                                    <button class="btn btn-white btn-xs">Active</button>
                                                </div>
                                            </td>
                                            <td>Admin Template</td>
                                            <td>Alvarion Ltd.</td>
                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                            </td>
                                            <td>15%</td>
                                            <td>June 11, 2016</td>
                                            <td>
                                                <div class="support-list-img">
                                                    <a href="#"><img src="img/notification/6.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/2.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/5.jpg" alt="" />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group project-list-action">
                                                    <button class="btn btn-white btn-action btn-xs"><i class="fa fa-folder"></i> View</button>
                                                    <button class="btn btn-white btn-xs"><i class="fa fa-pencil"></i> Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>18</td>
                                            <td>
                                                <div class="btn-group project-list-ad">
                                                    <button class="btn btn-white btn-xs">Active</button>
                                                </div>
                                            </td>
                                            <td>FrontEnd</td>
                                            <td>Amcor Ltd.</td>
                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                            </td>
                                            <td>15%</td>
                                            <td>May 9, 2015</td>
                                            <td>
                                                <div class="support-list-img">
                                                    <a href="#"><img src="img/notification/3.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/4.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/5.jpg" alt="" />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group project-list-action">
                                                    <button class="btn btn-white btn-action btn-xs"><i class="fa fa-folder"></i> View</button>
                                                    <button class="btn btn-white btn-xs"><i class="fa fa-pencil"></i> Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>19</td>
                                            <td>
                                                <div class="btn-group project-list-ad">
                                                    <button class="btn btn-white btn-xs">Active</button>
                                                </div>
                                            </td>
                                            <td>Backend</td>
                                            <td>Amdocs Ltd.</td>
                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                            </td>
                                            <td>15%</td>
                                            <td>Feb 9, 2014</td>
                                            <td>
                                                <div class="support-list-img">
                                                    <a href="#"><img src="img/notification/6.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/2.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/3.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/4.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/5.jpg" alt="" />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group project-list-action">
                                                    <button class="btn btn-white btn-action btn-xs"><i class="fa fa-folder"></i> View</button>
                                                    <button class="btn btn-white btn-xs"><i class="fa fa-pencil"></i> Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>20</td>
                                            <td>
                                                <div class="btn-group project-list-ad">
                                                    <button class="btn btn-white btn-xs">Active</button>
                                                </div>
                                            </td>
                                            <td>Java Advance</td>
                                            <td>Amersham plc</td>
                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                            </td>
                                            <td>15%</td>
                                            <td>July 6, 2014</td>
                                            <td>
                                                <div class="support-list-img">
                                                    <a href="#"><img src="img/notification/6.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/2.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/3.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/5.jpg" alt="" />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group project-list-action">
                                                    <button class="btn btn-white btn-action btn-xs"><i class="fa fa-folder"></i> View</button>
                                                    <button class="btn btn-white btn-xs"><i class="fa fa-pencil"></i> Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>21</td>
                                            <td>
                                                <div class="btn-group project-list-ad">
                                                    <button class="btn btn-white btn-xs">Active</button>
                                                </div>
                                            </td>
                                            <td>Jquery Advance</td>
                                            <td>Amvescap plc</td>
                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                            </td>
                                            <td>15%</td>
                                            <td>Jun 6, 2013</td>
                                            <td>
                                                <div class="support-list-img">
                                                    <a href="#"><img src="img/notification/3.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/4.jpg" alt="" />
                                                    </a>
                                                    <a href="#"><img src="img/notification/5.jpg" alt="" />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group project-list-action">
                                                    <button class="btn btn-white btn-action btn-xs"><i class="fa fa-folder"></i> View</button>
                                                    <button class="btn btn-white btn-xs"><i class="fa fa-pencil"></i> Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        <?php include "inc/footer.php"; ?>
