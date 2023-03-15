<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $contact = $this->CommonModal->getRowById('contactdetails', 'cid', '1');
        $this->email = $contact[0]['f_email'];
        $this->phone = $contact[0]['f_contact'];
        $this->address = $contact[0]['address'];
        $this->fb = $contact[0]['facebook'];
        $this->insta = $contact[0]['instagram'];
        $this->youtube = $contact[0]['youtube'];
        $this->linkedin = $contact[0]['linkedin'];
        $this->telegram = $contact[0]['telegram'];
    }

    public function index()
    {
        $data['title'] = "Welcome To The Mentorship Project  ";
        $data['mentors'] = $this->CommonModal->getRowByIdWithLimit('bc_mentors', 'is_visible', '1', '8');
        $data['blogs'] = $this->CommonModal->getRowByIdWithLimit('bc_blog', 'is_visible', '1', '8');
        $data['initiatives'] = $this->CommonModal->getDataByIdInOrderLimit('bc_initiatives', array('is_visible' => '1'), 'id', 'DESC', '8');
        $data['banner'] = $this->CommonModal->getAllRowsInOrderWithLimit('bc_home_banner', '6', 'bid', 'DESC');
        $data['whatsnew'] = $this->CommonModal->getRowById('bc_whats_new', 'bid', '1');
        $data['testimonials'] = $this->CommonModal->getAllRows('testimonial');
        $data['fest'] = $this->CommonModal->getAllRowsInOrderWithLimit('bc_law_fest', '12', 'bid', 'DESC');
        $this->load->view('home', $data);
    }

    public function about()
    {
        $data['title'] = "About Us - The Mentorship Project  ";
        $data['testimonials'] = $this->CommonModal->getAllRows('testimonial');
        $this->load->view('about', $data);
    }



    public function product_details($proid)
    {
        $data['title'] = "Our Products Details - The Mentorship Project  ";
        $data['getproduct'] = $this->CommonModal->getRowByIdInOrder('bc_product', array('is_visible' => '0', 'id' => $proid), 'id', 'ASC');
        $this->load->view('product-details', $data);
    }



    public function blog()
    {
        $data['title'] = "Our Blogs - The Mentorship Project  ";
        $data['blogs'] = $this->CommonModal->getAllRows('bc_blog');
        $this->load->view('blog', $data);
    }

    public function blog_details($id, $title)

    {
        $data['title'] =  $title . "The Mentorship Project  ";
        $id = decryptId($id);

        $data['tags'] = 'blog';
        $data['details'] = $this->CommonModal->getRowById('bc_blog', 'blog_id', $id);
        $data['blogs'] = $this->CommonModal->getRowByIdWithLimit('bc_blog', 'is_visible', '1', '8');
        $this->load->view('blog-details', $data);
    }

    public function newsletter_pdf()
    {
        $data['title'] = "Our Newsletter - The Mentorship Project  ";
        $data['newsletter'] = $this->CommonModal->getAllRows('bc_newslatter_pdf');
        $this->load->view('newsletter', $data);
    }


    public function contact()
    {
        $data['title'] = "Contact Us - The Mentorship Project ";
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $ins = $this->CommonModal->insertRow('contact_query', $post);
            if ($ins) {

                $this->session->set_userdata('msg', '<div class="alert alert-success"><img src="./assets/images/thankyou.png"><h5>Your query is successfully submit. We will contact you as soon as possible.</h5></div>');

                redirect('thankyou');
            } else {
                $this->session->set_userdata('msg', '<div class="alert alert-danger">We are facing technical error ,please try again later or get in touch with Email ID provided in contact section.</div>');
                redirect('thankyou');
            }
        } else {
        }
        $this->load->view('contact', $data);
    }



    public function mentee_registration()
    {
        $data['title'] = "Register as Mentee - The Mentorship Project";
        if (count($_POST) > 0) {
            $count = $this->CommonModal->getNumRows('mentee', array('email' => $this->input->post('email'), 'number' => $this->input->post('number')));
            if ($count > 0) {
                $this->session->set_userdata('msg', '<h6 class="alert alert-warning">You have already registered with this email id or number no.</h6>');
            } else {
                $post = $this->input->post();

                // $message = sendmail($post['email'] . '/' . $post['number'],  $post['password'], base_url() . 'login');
                // sendmail($post['email'], 'Registered with The Mentorship Project  | Welcome User', $message);
                $id = $this->CommonModal->insertRowReturnId('mentee', $post);
                if (!empty($id)) {
                    $this->session->set_userdata('msg', '<div class="alert alert-success"><img src="./assets/images/thankyou.png"><h5>On the basis of your reply, someone from our team shall connect with you. We wish to clarify that since our mentors are working professionals so on the basis of their availability, we shall connect you with them after having a discussion with you. Since, slots are limited so every month, we shall shortlist approx. 10 candidates for our mentorship program</h5></div>');
                    $session = $this->session->set_userdata(array('login_user_id' => $id, 'login_user_name' => $post['name'], 'login_user_email' => $post['email'], 'login_user_number' => $post['number']));
                    redirect(base_url('profile'));
                } else {
                    $this->session->set_userdata('msg', '<h6 class="alert alert-danger">Server error</h6>');
                }
            }
        }
        $this->load->view('mentee-registration', $data);
    }

    public function mentee_login()
    {

        if ($this->session->has_userdata('login_user_id')) {
            redirect(base_url('profile'));
        }

        $data['logo'] = 'assets/logo.png';

        $data['title'] = 'Login -  The Mentorship Project ';
        if (count($_POST) > 0) {
            extract($this->input->post());
            $table = "mentee";
            $login_data = $this->CommonModal->getRowByOr($table, array('email' => $uname), array('number' => $uname));

            if (!empty($login_data)) {
                if ($login_data[0]['password'] == $password) {
                    $session = $this->session->set_userdata(array('login_user_id' => $login_data[0]['id'], 'login_user_name' => $login_data[0]['name'], 'login_user_email' => $login_data[0]['email'], 'login_user_number' => $login_data[0]['number']));


                    redirect(base_url('profile'));
                } else {
                    $this->session->set_userdata('msg', '<h6 class="alert alert-warning">Wrong Password.</h6>');
                    redirect(base_url('login'));
                }
            } else {
                $this->session->set_flashdata('loginError', '<h6 class="alert alert-warning">Username or Password not match.</h6>');
                redirect(base_url('login'));
            }
        } else {
            if ($this->session->has_userdata('login_user_id')) {
                redirect(base_url('profile'));
            }
        }
        $this->load->view('mentee-login', $data);
    }

    public function profile()
    {
        if (!$this->session->has_userdata('login_user_id')) {
            redirect(base_url());
        }
        $data['login_user'] = $this->session->userdata();
        $data['profiledata'] = $this->CommonModal->getRowById('mentee', 'id', $this->session->userdata('login_user_id'));
        if (count($_POST) > 0) {

            $post = $this->input->post();
            $savedata = $this->CommonModal->updateRowById('mentee', 'id', $this->session->userdata('login_user_id'), $post);

            if ($savedata) {
                $this->session->set_flashdata('msg', '<h6 class="alert alert-warning">Profile Updated Sucessfully</h6>');
            } else {
                $this->session->set_userdata('msg', '<h6 class="alert alert-warning">Something went Wrong. please try again later</h6>');
            }
            redirect(base_url('profile'));
        } else {
            $data['title'] = 'Profile -   The Mentorship Project';
            $this->load->view('profile', $data);
        }
    }


    public function logout()
    {
        $this->session->unset_userdata('login_user_id');
        $this->session->unset_userdata('login_user_name');
        $this->session->unset_userdata('login_user_email');
        $this->session->unset_userdata('login_user_number');
        redirect(base_url());
    }

    public function mentors()
    {
        $data['title'] = "Our Mentors - The Mentorship Project";
        $data['mentors'] = $this->CommonModal->getRowById('bc_mentors', 'is_visible', '1');

        $this->load->view('mentors', $data);
    }

    public function mentor_registration()
    {
        $data['title'] = "Register as mentor - The Mentorship Project";
        if (count($_POST) > 0) {
            $post = $this->input->post();

            $post['is_visible'] = '0';
            $ins = $this->CommonModal->insertRow('bc_mentors', $post);
            if ($ins) {

                $this->session->set_userdata('msg', '<div class="alert alert-success"><img src="./assets/images/thankyou.png"><h5> Thank you for registering as a mentor on our platform. Your willingness to share your expertise and experience with others is greatly appreciated and we are excited to have you as part of our community. </h5></div>');

                redirect('thankyou');
            } else {
                $this->session->set_userdata('msg', '<div class="alert alert-danger">We are facing technical error ,please try again later or get in touch with Email ID provided in contact section.</div>');
                redirect('thankyou');
            }
        } else {
        }

        $this->load->view('mentor-registration', $data);
    }

    public function join_us()
    {
        $data['title'] = "Join us as Member/Student Ambassador - The Mentorship Project";
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $ins = $this->CommonModal->insertRow('bc_join_us', $post);
            if ($ins) {

                $this->session->set_userdata('msg', '<div class="alert alert-success"><img src="./assets/images/thankyou.png"><h5> Thank you for  Join us as a Member/Student Ambassador on our platform. Your willingness to share your expertise and experience with others is greatly appreciated and we are excited to have you as part of our community. </h5></div>');

                redirect('thankyou');
            } else {
                $this->session->set_userdata('msg', '<div class="alert alert-danger">We are facing technical error ,please try again later or get in touch with Email ID provided in contact section.</div>');
                redirect('thankyou');
            }
        } else {
        }

        $this->load->view('join-us', $data);
    }


    public function policy($title)

    {
        $data['title'] = $title . "The Mentorship Project";
        $data['policy'] = $this->CommonModal->getRowById('bc_policy', 'tag', $title);
        $this->load->view('policy', $data);
    }

    public function initiatives()
    {
        $data['title'] = "Our Initiatives - The Mentorship Project";
        $data['whatsnew'] = $this->CommonModal->getRowById('bc_whats_new', 'bid', '1');

        $data['initiatives'] = $this->CommonModal->getAllRows('bc_initiatives');
        //   $data['initiatives'] = $this->CommonModal->getDataByIdInOrderLimit('bc_initiatives', array('is_visible' => '1'), 'id', 'DESC', '8');
        $this->load->view('initiatives', $data);
    }

    public function initiatives_details($id, $title)

    {
        $data['title'] = $title . "The Mentorship Project  ";
        $id = decryptId($id);

        $data['tags'] = 'initiatives';
        $data['details'] = $this->CommonModal->getRowById('bc_initiatives', 'id', $id);
        $data['initiatives'] = $this->CommonModal->getDataByIdInOrderLimit('bc_initiatives', array('is_visible' => '1'),  'id', 'DESC',  '8');
        $this->load->view('intaitive-details', $data);
    }

    public function success_stories()
    {
        $data['title'] = "Success Stories & Achievement - The Mentorship Project";
        $data['success'] = $this->CommonModal->getAllRowsInOrder('bc_home_banner' , 'bid', 'DESC');
       
        $this->load->view('achievements', $data);
    }



    public function thankyou()
    {
        $data['title'] = "Thankyou - The Mentorship Project";
        $this->load->view('Thankyou', $data);
    }


    public function newsletter()
    {

        if (count($_POST) > 0) {
            $post = $this->input->post();
            $ins = $this->CommonModal->insertRow('bc_newsletter', $post);
            if ($ins) {

                $this->session->set_userdata('msg', '<div class="alert alert-success"><img src="./assets/images/thankyou.png"><h5>Thank you for subscribing to our newsletter! We are excited to have you join our community and look forward to sharing updates, news, and valuable information with you. Stay tuned for our latest content and exclusive offers!.</h5></div>');

                redirect('thankyou');
            } else {
                $this->session->set_userdata('msg', '<div class="alert alert-danger">We are facing technical error ,please try again later or get in touch with Email ID provided in contact section.</div>');
                redirect('thankyou');
            }
        }
    }
}
