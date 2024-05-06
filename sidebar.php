<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a board-order="<?php echo $board['board_order']; ?>"
                    class="nav-link <?php echo $active = ($page == 'home') ? 'active' : '' ?>" href="./index.php">
                    <i class="fa fa-home"></i>
                    <span>Home</span>
                </a>
            </li>
            <?php
            if (isAdmin()) {
                ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo $active = ($page == 'users') ? 'active' : '' ?>" href="./users.php">
                        <i class="fa fa-users"></i>
                        <span>Users</span>
                    </a>
                </li>
                <?php
            } ?>
            <li class="nav-item">
                <a class="nav-link <?php echo $active = ($page == 'projects' || $page == 'tasks') ? 'active' : '' ?>"
                    href="./projects.php">
                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="white">
                        <path
                            d="M0 2.889A2.889 2.889 0 0 1 2.889 0H13.11A2.889 2.889 0 0 1 16 2.889V13.11A2.888 2.888 0 0 1 13.111 16H2.89A2.889 2.889 0 0 1 0 13.111V2.89Zm1.333 5.555v4.667c0 .859.697 1.556 1.556 1.556h6.889V8.444H1.333Zm8.445-1.333V1.333h-6.89A1.556 1.556 0 0 0 1.334 2.89V7.11h8.445Zm4.889-1.333H11.11v4.444h3.556V5.778Zm0 5.778H11.11v3.11h2a1.556 1.556 0 0 0 1.556-1.555v-1.555Zm0-7.112V2.89a1.555 1.555 0 0 0-1.556-1.556h-2v3.111h3.556Z">
                        </path>
                    </svg>
                    <span>Projects</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $active = ($page == 'messages') ? 'active' : '' ?>" href="./messages.php">
                    <i class="fa fa-comments"></i>
                    <span>Messages</span>
                    <?php
                    // echo countUnreadMessages();
                    ?>
                    <?php echo $unread = (countUnreadMessages() > 0) ? '<span class="badge bg-danger rounded-circle">' . countUnreadMessages() . '</span>' : '' ?>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $active = ($page == 'notes') ? 'active' : '' ?>" href="./notes.php">
                    <i class="fa fa-map-pin"></i>
                    <span>Notes</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $active = ($page == 'events') ? 'active' : '' ?>" href="./events.php">
                    <i class="fa fa-calendar"></i>
                    <span>Events</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $active = ($page == 'timer') ? 'active' : '' ?>" href="./timer.php">
                    <i class="fa fa-stopwatch"></i>
                    <span>Timer</span>
                </a>
            </li>
        </ul>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link add-link" href="#" data-bs-toggle="modal" data-bs-target="#addNoteModal">
                    <span><i class="fa fa-plus"></i> Add Note</span>
                </a>
            </li>
        </ul>
    </div>
</nav>