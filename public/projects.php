<!DOCTYPE html>
<html lang="en">
<?php include '../backend/getProjects.php'; ?>
<?php include 'template/head.php'; ?>
<body>
    <?php include 'template/header.php'; ?>
    <div class="section-projects">
        <h1>My Projects!</h1>
        <h2>
            These are all my projects from the past.<br> 
            Some finished, some WIP/discontinued!
        </h2>
        <div class="search-options">
            <div class="search-filters">
                <div class="custom-dropdown">
                    <div class="dropdown-button project-filter">Project state...</div>
                    <div class="dropdown-menu">
                        <div class="dropdown-option selected" data-value="all">All</div>
                        <div class="dropdown-option" data-value="wip">WIP</div>
                        <div class="dropdown-option" data-value="discontinued">Discontinued</div>
                        <div class="dropdown-option option-last"data-value="finished">Finished</div>
                    </div>
                </div>
                <div class="custom-dropdown">
                    <div class="dropdown-button project-filter">Project type...</div>
                    <div class="dropdown-menu">
                        <div class="dropdown-option selected" data-value="all">All</div>
                        <div class="dropdown-option" data-value="community">Community</div>
                        <div class="dropdown-option" data-value="personal">Personal</div>
                        <div class="dropdown-option option-last" data-value="work">Work</div>
                    </div>
                </div>
            </div>
            <div class="search-container">
                <input type="text" id="search" class="search-bar project-filter" placeholder="PHP, JS, Python..." onchange="filterProjects()">
            </div>
        </div>
    </div>
    <div class="project-grid-body">
        <div class="project-grid">
            <div class="project-grid-item" onclick="openProfile()">
                <div class="img">
                    <div class="project-title">Placeholder</div>
                    <div class="taglist">
                        <div class="tag">
                            <i class="fa-solid fa-tag"></i>
                            <p>PHP</p>
                        </div>
                        <div class="tag">
                            <i class="fa-solid fa-tag"></i>
                            <p>JS</p>
                        </div>
                        <div class="tag">
                            <i class="fa-solid fa-tag"></i>
                            <p>Discontinued</p>
                        </div>  
                        <div class="tag">
                            <i class="fa-solid fa-tag"></i>
                            <p>Community</p>
                        </div>
                        <div class="tag">
                            <i class="fa-solid fa-tag"></i>
                            <p>test</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php foreach ($projects as $project): ?>
                <div class="project-grid-item">
                    <div class="img" style="background-image: url(/img/<?php echo $project['imgPath']; ?>)">
                        <div class="project-title"><?php echo $project['name']; ?></div>
                        <div class="taglist">
                            <?php foreach ($project['tags'] as $tag): ?>
                                <div class="tag">
                                    <i class="fa-solid fa-tag"></i>
                                    <p><?php echo $tag; ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php include 'template/footer.php'; ?>
</body>
</html>
<?php include 'template/projectOverview.php'; ?>

<script>
<?php 
    include 'js/dropDownMenu.js'; 
    include 'js/filter.js';
?>
function openProfile() {
const closeProfileBtn = document.querySelector('.close-profile-btn');
const profileMenu = document.querySelector('.profile-menu');

    console.log("test")
    profileMenu.classList.add('show');

closeProfileBtn.addEventListener('click', () => {
    profileMenu.classList.remove('show');
});};

openProfile();
</script>