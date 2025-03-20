<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $image
 * @property string $description
 * @property string $first_counter_name
 * @property string $first_counter_number
 * @property string $second_counter_name
 * @property string $second_counter_number
 * @property string $third_counter_name
 * @property string $third_counter_number
 * @property string $fourth_counter_name
 * @property string $fourth_counter_number
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AboutUs newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AboutUs newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AboutUs query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AboutUs whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AboutUs whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AboutUs whereFirstCounterName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AboutUs whereFirstCounterNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AboutUs whereFourthCounterName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AboutUs whereFourthCounterNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AboutUs whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AboutUs whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AboutUs whereSecondCounterName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AboutUs whereSecondCounterNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AboutUs whereThirdCounterName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AboutUs whereThirdCounterNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AboutUs whereUpdatedAt($value)
 */
	class AboutUs extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $icon
 * @property string $title
 * @property string $description
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BannerFeature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BannerFeature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BannerFeature query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BannerFeature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BannerFeature whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BannerFeature whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BannerFeature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BannerFeature whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BannerFeature whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BannerFeature whereUpdatedAt($value)
 */
	class BannerFeature extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $image
 * @property int $user_id
 * @property string $title
 * @property string $slug
 * @property string $category
 * @property string $date
 * @property string $short_description
 * @property string $long_description
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereLongDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereUserId($value)
 */
	class Blog extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $image
 * @property string $name
 * @property string $slug
 * @property string $month
 * @property string $duration
 * @property string $course_fee
 * @property string $short_description
 * @property string $long_description
 * @property int $priority_number
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BtebCourse newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BtebCourse newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BtebCourse query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BtebCourse whereCourseFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BtebCourse whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BtebCourse whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BtebCourse whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BtebCourse whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BtebCourse whereLongDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BtebCourse whereMonth($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BtebCourse whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BtebCourse wherePriorityNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BtebCourse whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BtebCourse whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BtebCourse whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BtebCourse whereUpdatedAt($value)
 */
	class BtebCourse extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CustomStaticPage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CustomStaticPage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CustomStaticPage query()
 */
	class CustomStaticPage extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $image
 * @property string $name
 * @property string $slug
 * @property string $month
 * @property string $duration
 * @property string $course_fee
 * @property string $short_description
 * @property string $long_description
 * @property int $priority_number
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DiplomaEngineeringCourse newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DiplomaEngineeringCourse newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DiplomaEngineeringCourse query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DiplomaEngineeringCourse whereCourseFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DiplomaEngineeringCourse whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DiplomaEngineeringCourse whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DiplomaEngineeringCourse whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DiplomaEngineeringCourse whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DiplomaEngineeringCourse whereLongDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DiplomaEngineeringCourse whereMonth($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DiplomaEngineeringCourse whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DiplomaEngineeringCourse wherePriorityNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DiplomaEngineeringCourse whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DiplomaEngineeringCourse whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DiplomaEngineeringCourse whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DiplomaEngineeringCourse whereUpdatedAt($value)
 */
	class DiplomaEngineeringCourse extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $image
 * @property string $name
 * @property string $slug
 * @property string $location
 * @property string $date
 * @property string $time
 * @property string $fee
 * @property string $short_description
 * @property string $long_description
 * @property int $priority_number
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereLongDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event wherePriorityNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereUpdatedAt($value)
 */
	class Event extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $image
 * @property string $title
 * @property string $description
 * @property string|null $button_name
 * @property string|null $button_url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FrontPageAboutUsSection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FrontPageAboutUsSection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FrontPageAboutUsSection query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FrontPageAboutUsSection whereButtonName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FrontPageAboutUsSection whereButtonUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FrontPageAboutUsSection whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FrontPageAboutUsSection whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FrontPageAboutUsSection whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FrontPageAboutUsSection whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FrontPageAboutUsSection whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FrontPageAboutUsSection whereUpdatedAt($value)
 */
	class FrontPageAboutUsSection extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $top_title
 * @property string $main_title
 * @property string|null $button_name
 * @property string|null $button_url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FrontPageCtaSection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FrontPageCtaSection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FrontPageCtaSection query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FrontPageCtaSection whereButtonName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FrontPageCtaSection whereButtonUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FrontPageCtaSection whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FrontPageCtaSection whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FrontPageCtaSection whereMainTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FrontPageCtaSection whereTopTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FrontPageCtaSection whereUpdatedAt($value)
 */
	class FrontPageCtaSection extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $image
 * @property string|null $video_link
 * @property string $title
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FrontPageSuccessStorySection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FrontPageSuccessStorySection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FrontPageSuccessStorySection query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FrontPageSuccessStorySection whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FrontPageSuccessStorySection whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FrontPageSuccessStorySection whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FrontPageSuccessStorySection whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FrontPageSuccessStorySection whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FrontPageSuccessStorySection whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FrontPageSuccessStorySection whereVideoLink($value)
 */
	class FrontPageSuccessStorySection extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $image
 * @property string $name
 * @property string $slug
 * @property string $designation
 * @property string|null $email
 * @property string|null $whatsapp
 * @property string|null $facebook_id_name
 * @property string|null $facebook_url
 * @property string|null $linkedin_id_name
 * @property string|null $linkedin_url
 * @property string|null $twitter_id_name
 * @property string|null $twitter_url
 * @property string|null $website_url
 * @property string|null $address
 * @property string|null $address_url
 * @property string $short_description
 * @property string $long_description
 * @property int $priority_number
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ManagementCommittee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ManagementCommittee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ManagementCommittee query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ManagementCommittee whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ManagementCommittee whereAddressUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ManagementCommittee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ManagementCommittee whereDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ManagementCommittee whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ManagementCommittee whereFacebookIdName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ManagementCommittee whereFacebookUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ManagementCommittee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ManagementCommittee whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ManagementCommittee whereLinkedinIdName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ManagementCommittee whereLinkedinUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ManagementCommittee whereLongDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ManagementCommittee whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ManagementCommittee wherePriorityNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ManagementCommittee whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ManagementCommittee whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ManagementCommittee whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ManagementCommittee whereTwitterIdName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ManagementCommittee whereTwitterUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ManagementCommittee whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ManagementCommittee whereWebsiteUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ManagementCommittee whereWhatsapp($value)
 */
	class ManagementCommittee extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $image
 * @property string $title
 * @property string $slug
 * @property string $date
 * @property string $description
 * @property int $priority_number
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Notice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Notice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Notice query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Notice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Notice whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Notice whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Notice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Notice whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Notice wherePriorityNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Notice whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Notice whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Notice whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Notice whereUpdatedAt($value)
 */
	class Notice extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $image
 * @property string $title
 * @property string $description
 * @property int $priority_number
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Research newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Research newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Research query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Research whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Research whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Research whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Research whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Research wherePriorityNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Research whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Research whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Research whereUpdatedAt($value)
 */
	class Research extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $image
 * @property string $name
 * @property string $slug
 * @property string $month
 * @property string $duration
 * @property string $course_fee
 * @property string $short_description
 * @property string $long_description
 * @property int $priority_number
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShortCourse newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShortCourse newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShortCourse query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShortCourse whereCourseFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShortCourse whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShortCourse whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShortCourse whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShortCourse whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShortCourse whereLongDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShortCourse whereMonth($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShortCourse whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShortCourse wherePriorityNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShortCourse whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShortCourse whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShortCourse whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShortCourse whereUpdatedAt($value)
 */
	class ShortCourse extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string|null $button_text
 * @property string|null $button_url
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Slider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Slider newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Slider query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Slider whereButtonText($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Slider whereButtonUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Slider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Slider whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Slider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Slider whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Slider whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Slider whereUpdatedAt($value)
 */
	class Slider extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscriber newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscriber newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscriber query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscriber whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscriber whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscriber whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscriber whereUpdatedAt($value)
 */
	class Subscriber extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $image
 * @property string $name
 * @property string $slug
 * @property string $designation
 * @property string|null $email
 * @property string|null $whatsapp
 * @property string|null $facebook_id_name
 * @property string|null $facebook_url
 * @property string|null $linkedin_id_name
 * @property string|null $linkedin_url
 * @property string|null $twitter_id_name
 * @property string|null $twitter_url
 * @property string|null $website_url
 * @property string|null $address
 * @property string|null $address_url
 * @property string $short_description
 * @property string $long_description
 * @property int $priority_number
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereAddressUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereFacebookIdName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereFacebookUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereLinkedinIdName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereLinkedinUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereLongDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher wherePriorityNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereTwitterIdName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereTwitterUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereWebsiteUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Teacher whereWhatsapp($value)
 */
	class Teacher extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $avatar
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property string $department
 * @property string $semester
 * @property string $student_type
 * @property string $session
 * @property string $role
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereDepartment($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereSemester($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereSession($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereStudentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

