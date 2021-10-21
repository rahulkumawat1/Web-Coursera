<!DOCTYPE html>

<head>
    <title>Web Coursera</title>
    <link rel="stylesheet" href="../bootstrap-5.1.0-dist/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../css/index.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">Web Coursera</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-4">
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.html">Sign Up</a>
                    </li>
                </ul>

                <form class="d-flex">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-primary" type="submit">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row mt-5 ms-4">
            <div class="col-lg-6 mt-5">
                <img class="rounded mt-5" src="../images/HTML-Image.jpg" alt="" height="370" width="640" />
            </div>
            <div class="col-lg-5">
                <div class="card">
                    <div class="mt-4 ms-3">
                        <h5>Learn HTML</h5>
                    </div>
                    <div class="card-body mt-2">
                        <p>
                            HTML stands for Hyper Text Markup Language, which is the most
                            widely used language on Web to develop web pages. HTML was created
                            by Berners-Lee in late 1991 but "HTML 2.0" was the first standard
                            HTML specification which was published in 1995. HTML 4.01 was a
                            major version of HTML and it was published in late 1999. Though
                            HTML 4.01 version is widely used but currently we are having
                            HTML-5 version which is an extension to HTML 4.01, and this
                            version was published in 2012. Originally, HTML was developed with
                            the intent of defining the structure of documents like headings,
                            paragraphs, lists, and so forth to facilitate the sharing of
                            scientific information between researchers. Now, HTML is being
                            widely used to format web pages with the help of different tags
                            available in HTML language. HTML is a MUST for students and
                            working professionals to become a great Software Engineer
                            specially when they are working in Web Development Domain. HTML is
                            used to create pages which are rendered over the web. Almost every
                            page of web is having html tags in it to render its details in
                            browser.HTML provides tags which are used to navigate from one
                            page to another and is heavily used in internet navigation.HTML
                            pages now-a-days works well on all platform, mobile, tabs, desktop
                            or laptops owing to responsive design strategy.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <div class="table-responsive">
                <table class="table table-striped custom-table">
                    <thead>
                        <tr>
                            <th scope="col">S.No</th>
                            <th scope="col">Video</th>
                            <th scope="col">Title</th>
                            <th scope="col">
                                <div>Duration</div>
                                <div style="
                    text-align: center;
                    width: 55%;
                    cursor: pointer;
                    color: rgb(14, 191, 235);
                  " id="sortButton">
                                    v
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody id="references">
                        <tr scope="row" data-len="1">
                            <td>1</td>
                            <td>
                                <a href="https://www.youtube.com/watch?v=BvSTiqvm7sM"><img src="../images/html_course/html1.jpg" alt="" height="100" width="200" /></a>
                            </td>
                            <td>
                                <a href="https://www.youtube.com/watch?v=BvSTiqvm7sM">What is HTML? A brief introduction of html || HTML basics</a>
                                <small class="d-block">Sani World</small>
                            </td>
                            <td>Small</td>
                        </tr>
                        <tr scope="row" data-len="2">
                            <td>2</td>
                            <td>
                                <a href="https://www.youtube.com/watch?v=naVmNPTxwfI"><img src="../images/html_course/html2.jpg" alt="" height="100" width="200" /></a>
                            </td>
                            <td>
                                <a href="https://www.youtube.com/watch?v=BvSTiqvm7sM">Creating an HTML file in Notepad
                                </a>
                                <small class="d-block">Dan Gardner</small>
                            </td>
                            <td>Small</td>
                        </tr>
                        <tr scope="row" data-len="3">
                            <td>3</td>
                            <td>
                                <a href="https://www.youtube.com/watch?v=BvSTiqvm7sM"><img src="../images/html_course/html3.webp" alt="" height="100" width="200" /></a>
                            </td>
                            <td>
                                <a href="https://youtu.be/8JQaedsB2qI">INTRODUCTION TO HTML </a>
                                <small class="d-block">Sundeep Saradhi Kanthety</small>
                            </td>
                            <td>Medium</td>
                        </tr>
                        <tr scope="row" data-len="4">
                            <td>4</td>
                            <td>
                                <a href="https://www.youtube.com/watch?v=BsDoLVMnmZs"><img src="../images/html_course/html4.webp" alt="" height="100" width="200" /></a>
                            </td>
                            <td>
                                <a href="https://youtu.be/8JQaedsB2qI">HTML Tutorial For Beginners In Hindi (With Notes)
                                </a>
                                <small class="d-block">CodeWithHarry</small>
                            </td>
                            <td>Large</td>
                        </tr>
                        <tr scope="row" data-len="5">
                            <td>5</td>
                            <td>
                                <a href="https://www.youtube.com/watch?v=BsDoLVMnmZs"><img src="../images/html_course/html5.jpg" alt="" height="100" width="200" /></a>
                            </td>
                            <td>
                                <a href="https://youtu.be/qz0aGYrrlhU">HTML Tutorial for Beginners: HTML Crash Course [2021]
                                </a>
                                <small class="d-block">CodeWithHarry</small>
                            </td>
                            <td>Large</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="content" style="padding-top: 0;">
        <div class="container">
            <div style="color: #e0e0e0; font-size: 1.5rem; padding: 2rem 0;">Site References ></div>
            <div class="table-responsive">
                <table class="table table-striped custom-table">
                    <thead>
                        <tr>
                            <th scope="col">S.No</th>
                            <th scope="col">References</th>
                            <th scope="col">Links</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr scope="row" data-len="1">
                            <td>1</td>
                            <td>W3School</td>
                            <td><a href="https://www.w3schools.com/html/">Reference1</a></td>
                        </tr>
                        <tr scope="row" data-len="2">
                            <td>2</td>
                            <td>MDN</td>
                            <td><a href="https://developer.mozilla.org/en-US/docs/Web/HTML">Reference2</a></td>
                        </tr>
                        <tr scope="row" data-len="3">
                            <td>3</td>
                            <td>DevDocs</td>
                            <td><a href="https://devdocs.io/html/">Reference3</a></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Site footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>About</h6>
                    <p class="text-justify">
                        <i>Web Coursera</i> is an initiative to help the upcoming
                        programmers with the code. Web Coursera focuses on providing the
                        most efficient code or snippets as the code wants to be simple. We
                        will help programmers build up concepts in different web development
                        concepts that include HTML, CSS, JavaScript, Java, Python and ajax.
                    </p>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Categories</h6>
                    <ul class="footer-links">
                        <li>
                            <a href="html_course.html">HTML</a>
                        </li>
                        <li>
                            <a href="css_course.html">CSS</a>
                        </li>
                        <li>
                            <a href="js_course.html">JavaScript</a>
                        </li>
                        <li>
                            <a href="java_course.html">Java</a>
                        </li>
                        <li>
                            <a href="ajax_course.html">Ajax</a>
                        </li>
                        <li>
                            <a href="python_course.html">Python</a>
                        </li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Quick Links</h6>
                    <ul class="footer-links">
                        <li><a href="terms.html">Terms</a></li>
                        <li><a href="policy.html">Privacy Policy</a></li>
                        <li>
                            <a href="#">Help and Support</a>
                        </li>
                        <li>
                            <a href="#">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">
                        Copyright &copy; 2021 All Rights Reserved by
                        <a href="#">Web Coursera</a>.
                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li>
                            <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                        </li>
                        <li>
                            <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script type="application/javascript">
        function sortWithIndeces(toSort) {
            for (var i = 0; i < toSort.length; i++) {
                toSort[i] = [toSort[i], i];
            }
            toSort.sort(function(left, right) {
                return left[0] < right[0] ? -1 : 1;
            });
            toSort.sortIndices = [];
            for (var j = 0; j < toSort.length; j++) {
                toSort.sortIndices.push(toSort[j][1]);
                toSort[j] = toSort[j][0];
            }
            return toSort;
        }

        function myFunction(event) {
            refrences = document.getElementById("references");
            refs = [...refrences.children];
            data_lens = refs.map((ref) => ref.getAttribute("data-len"));
            sorted_indices = sortWithIndeces(data_lens).sortIndices;
            sorted_refs = [];

            if (event.srcElement.innerText == "^") {
                event.srcElement.innerText = "v";
                for (var i = 0; i < sorted_indices.length; i++) {
                    refrences.children[sorted_indices[i]].children[0].innerText = i + 1;
                    sorted_refs.push(refs[sorted_indices[i]].outerHTML);
                }
            } else {
                event.srcElement.innerText = "^";
                for (var i = sorted_indices.length - 1; i >= 0; i--) {
                    refrences.children[sorted_indices[i]].children[0].innerText =
                        sorted_indices.length - i;
                    sorted_refs.push(refs[sorted_indices[i]].outerHTML);
                }
            }

            refrences.innerHTML = sorted_refs.join(" ");
        }

        document.getElementById("sortButton").addEventListener("click", myFunction);
    </script>
</body>