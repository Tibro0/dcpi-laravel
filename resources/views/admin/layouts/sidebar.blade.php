<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard') }}">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin.dashboard') }}">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ setActive(['admin.dashboard']) }}"><a class="nav-link" href="{{ route('admin.dashboard') }}"><i
                        class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>

            <li class="menu-header">Starter</li>

            <li
                class="dropdown {{ setActive(['admin.slider.*', 'admin.banner-feature.*', 'admin.front-page-about-us-section.*', 'admin.front-page-cta-section.*', 'admin.front-page-success-story-section.*']) }}">
                <a href="javascript:;" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-file-alt"></i>
                    <span>HomePage Section</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.slider.*']) }}"><a class="nav-link"
                            href="{{ route('admin.slider.index') }}">Slider</a>
                    </li>
                    <li class="{{ setActive(['admin.banner-feature.*']) }}"><a class="nav-link"
                            href="{{ route('admin.banner-feature.index') }}">Banner
                            Feature</a>
                    </li>
                    <li class="{{ setActive(['admin.front-page-about-us-section.*']) }}"><a class="nav-link"
                            href="{{ route('admin.front-page-about-us-section.index') }}">About Us
                            Section</a>
                    </li>
                    <li class="{{ setActive(['admin.front-page-cta-section.*']) }}"><a class="nav-link"
                            href="{{ route('admin.front-page-cta-section.index') }}">Cta
                            Section</a>
                    </li>
                    <li class="{{ setActive(['admin.front-page-success-story-section.*']) }}"><a class="nav-link"
                            href="{{ route('admin.front-page-success-story-section.index') }}">Success Story
                            Section</a>
                    </li>
                </ul>
            </li>

            <li
                class="dropdown {{ setActive(['admin.diploma-engineering-course.*', 'admin.short-course.*', 'admin.bteb-course.*']) }}">
                <a href="javascript:;" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-file-alt"></i>
                    <span>Our Courses</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.diploma-engineering-course.*']) }}"><a class="nav-link"
                            href="{{ route('admin.diploma-engineering-course.index') }}">Diploma Course</a>
                    </li>
                    <li class="{{ setActive(['admin.short-course.*']) }}"><a class="nav-link"
                            href="{{ route('admin.short-course.index') }}">Short
                            Course</a>
                    </li>
                    <li class="{{ setActive(['admin.bteb-course.*']) }}"><a class="nav-link"
                            href="{{ route('admin.bteb-course.index') }}">CBTA
                            (BTEB/NSDA)</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown {{ setActive(['admin.event.*']) }}">
                <a href="javascript:;" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-file-alt"></i>
                    <span>Our Event</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.event.*']) }}"><a class="nav-link"
                            href="{{ route('admin.event.index') }}">Events</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown {{ setActive(['admin.teacher.*', 'admin.management-committee.*']) }}">
                <a href="javascript:;" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-file-alt"></i>
                    <span>Our Teacher</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.teacher.*']) }}"><a class="nav-link"
                            href="{{ route('admin.teacher.index') }}">Teacher</a>
                    </li>
                    <li class="{{ setActive(['admin.management-committee.*']) }}"><a class="nav-link"
                            href="{{ route('admin.management-committee.index') }}">Management Committee</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown {{ setActive(['admin.blog.*']) }}">
                <a href="javascript:;" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-file-alt"></i>
                    <span>Manage Blog</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.blog.*']) }}"><a class="nav-link"
                            href="{{ route('admin.blog.index') }}">Blog</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown {{ setActive(['admin.about-us.*']) }}">
                <a href="javascript:;" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-file-alt"></i>
                    <span>About Us Page</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.about-us.*']) }}"><a class="nav-link"
                            href="{{ route('admin.about-us.index') }}">About Us</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown {{ setActive(['admin.research.*']) }}">
                <a href="javascript:;" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-file-alt"></i>
                    <span>Research Page</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.research.*']) }}"><a class="nav-link"
                            href="{{ route('admin.research.index') }}">Our
                            Research</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown {{ setActive(['admin.notice.*']) }}">
                <a href="javascript:;" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-file-alt"></i>
                    <span>Notice</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.notice.*']) }}"><a class="nav-link"
                            href="{{ route('admin.notice.index') }}">Notice</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown {{ setActive(['admin.our-identity.*']) }}">
                <a href="javascript:;" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-file-alt"></i>
                    <span>Custom Pages</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.our-identity.*']) }}"><a class="nav-link"
                            href="{{ route('admin.our-identity.index') }}">Our
                            identity</a>
                    </li>
                </ul>
            </li>

            <li class="{{ setActive(['admin.subscriber.*']) }}"><a class="nav-link"
                    href="{{ route('admin.subscriber.index') }}"><i class="fas fa-cogs"></i>
                    <span>Subscriber</span></a></li>

            <li class="dropdown {{ setActive(['admin.student.*']) }}">
                <a href="javascript:;" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-file-alt"></i>
                    <span>Student</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.student.*']) }}"><a class="nav-link"
                            href="{{ route('admin.student.index') }}">All Student</a>
                    </li>
                </ul>
            </li>

            <li
                class="dropdown {{ setActive(['admin.civil.*', 'admin.computer.*', 'admin.electrical.*', 'admin.electronics.*', 'admin.telecommunication.*']) }}">
                <a href="javascript:;" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-file-alt"></i>
                    <span>Diploma Class Routine</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.civil.*']) }}"><a class="nav-link"
                            href="{{ route('admin.civil.index') }}">Civil</a>
                    </li>
                    <li class="{{ setActive(['admin.computer.*']) }}"><a class="nav-link"
                            href="{{ route('admin.computer.index') }}">Computer</a>
                    </li>
                    <li class="{{ setActive(['admin.electrical.*']) }}"><a class="nav-link"
                            href="{{ route('admin.electrical.index') }}">Electrical</a>
                    </li>
                    <li class="{{ setActive(['admin.electronics.*']) }}"><a class="nav-link"
                            href="{{ route('admin.electronics.index') }}">Electronics</a>
                    </li>
                    <li class="{{ setActive(['admin.telecommunication.*']) }}"><a class="nav-link"
                            href="{{ route('admin.telecommunication.index') }}">Telecommunication</a>
                    </li>
                </ul>
            </li>

            <li class="{{ setActive(['admin.short-course-routine.*']) }}"><a class="nav-link"
                    href="{{ route('admin.short-course-routine.index') }}"><i class="fas fa-cogs"></i>
                    <span>Short Course Routine</span></a></li>

            <li class="{{ setActive(['admin.bteb-course-routine.*']) }}"><a class="nav-link"
                    href="{{ route('admin.bteb-course-routine.index') }}"><i class="fas fa-cogs"></i>
                    <span>BTEB Course Routine</span></a></li>

            <li class="dropdown {{ setActive(['admin.social-link.*']) }}">
                <a href="javascript:;" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-file-alt"></i>
                    <span>Site Setting</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.social-link.*']) }}"><a class="nav-link"
                            href="{{ route('admin.social-link.index') }}">Social
                            Link</a>
                    </li>
                </ul>
            </li>

            {{-- <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-file-alt"></i>
                    <span>Pages</span></a>
                <ul class="dropdown-menu">
                    <li class="active"><a class="nav-link" href="#">Custom Page</a>
                    </li>
                </ul>
            </li> --}}

            {{-- <li class="active"><a class="nav-link" href="#"><i class="fas fa-cogs"></i>
                    <span>Settings</span></a></li> --}}
        </ul>
    </aside>
</div>
