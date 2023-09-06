<?php include("includes/header.php"); ?>
<section class="faq-banner">
    <div class="container">
    <div class="home-heading">
                            <ol class="breadcrumb ">
                                <li class="breadcrumb-item"><a href="index.php">HOME</a></li>
                                <li class="breadcrumb-item active" aria-current="page">FAQ</li>
                            </ol>
                      
                    </div>
        <div class="flex">
            <div class="heading pb-3">
                <h2>We’r here to help you!</h2>
            </div>
            <form class="d-flex search-me" role="search">
                <input class="form-control me-2" type="search" placeholder="Type keywords to find answer" aria-label="Search">
                <div class="box">
                    <i class="bi bi-search"></i>
                </div>

            </form>
            <div class="sub-heading pt-3">
                <p>You can browse the topic below to find what you are looking for.</p>
            </div>
        </div>
</section>

<section class="container">
    <div class="heading text-center pt-5 pb-5">
        <h2>Frequently Asked Questions</h2>
    </div>

    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    What is DPI?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Digital Payments Interface (DPI) is a system that powers multiple bank accounts and wallets into a
                    single mobile application (of any participating bank or wallet), merging several banking features,
                    seamless fund routing & merchant payments into one hood
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Is DPI different from UPI?

                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                    Digital Payments Interface (DPI) is a system that powers multiple bank accounts and wallets into a
                    single mobile application (of any participating bank or wallet), merging several banking features,
                    seamless fund routing & merchant payments into one hood
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Can we transact from one wallet to another? how?
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                    Digital Payments Interface (DPI) is a system that powers multiple bank accounts and wallets into a
                    single mobile application (of any participating bank or wallet), merging several banking features,
                    seamless fund routing & merchant payments into one hood
             </div>
            </div>
        </div>
    </div>
</section>

<?php include("includes/footer.php"); ?>