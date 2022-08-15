<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package agroTech
 */

?>

<footer>
    <!-- <div class="wrapper"> -->
        <div class="footer__container">
            <div>
                <div class="footer__list footer__list-catalog">
                    <div class="footer__list-title">
                        Каталог:
                    </div>
                    <ul>
                        <li><a href="">Тракторы</a></li>
                        <li><a href="">Культиваторы</a></li>
                        <li><a href="">Сеялки</a></li>
                        <li><a href="">Глубокорыхлители</a></li>
                        <li><a href="">Дисковые бороны</a></li>
                        <li><a href="">Плуги оборотные</a></li>
                    </ul>
                </div>
                <!-- <div class="footer__list footer__list-services">
                    <div class="footer__list-title">
                        Услуги:
                    </div>
                    <ul>
                        <li><a href="">Кредит/лизинг</a></li>
                        <li><a href="">Обработка почвы</a></li>
                        <li><a href="">Сервис и гарантия</a></li>
                        <li><a href="">Каталог запчастей</a></li>
                    </ul>
                </div> -->
            </div>
            <div>
                <div class="footer__list footer__list-address">
                    <div class="footer__list-title">
                        Адрес:
                    </div>
                    <div>
                        <?php the_field('footer-address', 5); ?>
                    </div>
                    <div class="footer__email"><a href="mailto:<?php the_field('footer-email', 5); ?>"><?php the_field('footer-email', 5); ?></a></div>
                </div>
                <div class="footer__list footer__list-contact">
                    <div class="footer__list-title">
                        Связаться с нами:
                    </div>
                    <div>
                        <?php while (have_rows('footer-contact')) { the_row(); ?>
                            <a href="tel:<?php echo get_sub_field('phone', 5); ?>"><?php echo get_sub_field('phone' ,5); ?></a><br>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__copyright">
            <div>© 2020 Ростовский Завод Сельхозмашин «РЗС». Все права защищены</div>
            <div>Разработано <a style="color: #AA00AA" href="https://zaitsev.studio/">Студией Зайцева</a></div>
        </div>
    <!-- </div> -->
</footer>


<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="svg_map">
    <defs>
		<symbol id="mail" viewBox="0 0 32 32" fill="currentColor">
			<path d="M6.9974 5.33337H24.9974C26.1042 5.3333 27.1692 5.75678 27.9737 6.51694C28.7782 7.27709 29.2614 8.3163 29.3241 9.42137L29.3307 9.66671V22.3334C29.3308 23.4402 28.9073 24.5051 28.1472 25.3097C27.387 26.1142 26.3478 26.5974 25.2427 26.66L24.9974 26.6667H6.9974C5.89055 26.6668 4.82562 26.2433 4.02109 25.4831C3.21655 24.723 2.73339 23.6838 2.67073 22.5787L2.66406 22.3334V9.66671C2.66399 8.55986 3.08747 7.49494 3.84762 6.6904C4.60778 5.88586 5.64699 5.40271 6.75206 5.34004L6.9974 5.33337H24.9974H6.9974ZM27.3307 12.4974L16.4641 18.2174C16.3414 18.2822 16.2065 18.3208 16.0681 18.3306C15.9297 18.3405 15.7907 18.3215 15.6601 18.2747L15.5321 18.2187L4.66406 12.4987V22.3334C4.66408 22.919 4.88429 23.4831 5.28097 23.9139C5.67765 24.3447 6.2218 24.6105 6.8054 24.6587L6.9974 24.6667H24.9974C25.5832 24.6667 26.1475 24.4463 26.5783 24.0493C27.0091 23.6524 27.2749 23.1079 27.3227 22.524L27.3307 22.3334V12.4974ZM24.9974 7.33337H6.9974C6.41181 7.3334 5.84764 7.5536 5.41687 7.95028C4.98611 8.34696 4.72025 8.89111 4.67206 9.47471L4.66406 9.66671V10.2387L15.9974 16.2027L27.3307 10.2374V9.66671C27.3307 9.08091 27.1103 8.51656 26.7133 8.08576C26.3164 7.65497 25.7719 7.38924 25.1881 7.34137L24.9974 7.33337Z" fill="currentColor"></path>
		</symbol>
		<symbol id="addr" viewBox="0 0 16 16" fill="currentColor">
			<path d="M8.00004 2.98669C7.49635 2.98669 7.00398 3.13605 6.58518 3.41589C6.16639 3.69572 5.83997 4.09345 5.64722 4.55879C5.45447 5.02414 5.40404 5.53619 5.5023 6.03019C5.60057 6.5242 5.84311 6.97797 6.19927 7.33413C6.55543 7.69028 7.0092 7.93283 7.50321 8.03109C7.99721 8.12936 8.50926 8.07893 8.9746 7.88617C9.43995 7.69342 9.83768 7.36701 10.1175 6.94821C10.3973 6.52942 10.5467 6.03704 10.5467 5.53336C10.5467 4.85794 10.2784 4.21019 9.8008 3.7326C9.32321 3.255 8.67545 2.98669 8.00004 2.98669V2.98669ZM8.00004 7.19114C7.67216 7.19114 7.35164 7.09391 7.07902 6.91175C6.8064 6.72959 6.59392 6.47068 6.46845 6.16777C6.34298 5.86485 6.31015 5.53152 6.37411 5.20994C6.43808 4.88837 6.59597 4.59298 6.82781 4.36114C7.05966 4.12929 7.35504 3.9714 7.67662 3.90744C7.9982 3.84347 8.33152 3.8763 8.63444 4.00177C8.93736 4.12725 9.19627 4.33973 9.37843 4.61235C9.56059 4.88497 9.65781 5.20548 9.65781 5.53336C9.65664 5.97226 9.48146 6.39278 9.17069 6.70271C8.85993 7.01265 8.43894 7.1867 8.00004 7.18669V7.19114Z" fill="currentColor"></path>
			<path d="M7.99996 0.888916C6.6156 0.890072 5.28795 1.439 4.30699 2.4158C3.32602 3.39261 2.77145 4.71791 2.7644 6.10225C2.7644 8.1778 3.92885 9.91558 4.78218 11.1822L4.93774 11.4134C5.78675 12.6439 6.69755 13.8306 7.66663 14.9689L8.0044 15.3645L8.34218 14.9689C9.31114 13.8305 10.2219 12.6438 11.0711 11.4134L11.2266 11.1778C12.0755 9.91114 13.24 8.1778 13.24 6.10225C13.2329 4.71714 12.6777 3.39117 11.6958 2.41424C10.7139 1.43731 9.38509 0.888898 7.99996 0.888916V0.888916ZM10.4844 10.6667L10.3244 10.9022C9.55996 12.0489 8.54663 13.3334 7.99996 13.9689C7.47552 13.3334 6.43996 12.0489 5.67552 10.9022L5.51996 10.6667C4.73329 9.49336 3.65329 7.88892 3.65329 6.08447C3.65329 5.51366 3.76572 4.94844 3.98416 4.42107C4.2026 3.89371 4.52278 3.41454 4.9264 3.01091C5.33003 2.60729 5.8092 2.28712 6.33656 2.06868C6.86392 1.85023 7.42915 1.7378 7.99996 1.7378C8.57077 1.7378 9.136 1.85023 9.66336 2.06868C10.1907 2.28712 10.6699 2.60729 11.0735 3.01091C11.4771 3.41454 11.7973 3.89371 12.0158 4.42107C12.2342 4.94844 12.3466 5.51366 12.3466 6.08447C12.3466 7.90669 11.2711 9.51114 10.4844 10.6667V10.6667Z" fill="currentColor"></path>
		</symbol>
		<symbol id="tel" viewBox="0 0 32 32" fill="currentColor">
			<g clip-path="url(#clip0_97_4547)">
			<path d="M24.744 32C24.4325 31.9991 24.122 31.9641 23.8178 31.8958C18.0263 30.6706 12.6908 27.798 8.42537 23.6086C4.25094 19.4099 1.35576 14.0641 0.0900994 8.218C-0.0591376 7.4894 -0.0225089 6.73378 0.196462 6.02384C0.415432 5.31391 0.809375 4.67355 1.34039 4.16437L5.04495 0.51799C5.23417 0.334997 5.45899 0.194864 5.70475 0.106738C5.95051 0.0186115 6.21168 -0.015527 6.47121 0.0065501C6.74031 0.0352598 7 0.12391 7.23201 0.266266C7.46401 0.408621 7.6627 0.601227 7.81411 0.830537L12.4448 7.82969C12.6185 8.10126 12.7023 8.42267 12.684 8.74662C12.6656 9.07056 12.5461 9.37993 12.3429 9.6292L10.0183 12.4705C10.9441 14.566 12.2553 16.4598 13.8803 18.049C15.4949 19.6958 17.4032 21.0108 19.502 21.9227L22.3823 19.5833C22.6242 19.3878 22.9186 19.2722 23.2263 19.2519C23.534 19.2316 23.8405 19.3076 24.1049 19.4697L31.0973 24.0916C31.3372 24.2381 31.5417 24.4382 31.6953 24.677C31.8488 24.9158 31.9476 25.187 31.9841 25.4704C32.0206 25.7537 31.994 26.0419 31.9062 26.3132C31.8184 26.5845 31.6716 26.832 31.477 27.0371L27.8651 30.6929C27.4548 31.1105 26.9678 31.4409 26.4321 31.6652C25.8965 31.8895 25.3228 32.0033 24.744 32ZM6.32303 1.88183L2.61846 5.52821C2.31974 5.81286 2.09861 6.17213 1.97682 6.57068C1.85503 6.96922 1.83678 7.39333 1.92386 7.80127C3.10072 13.2871 5.80598 18.3069 9.7127 22.2542C13.7268 26.1956 18.7478 28.8976 24.1975 30.0489C24.6101 30.1371 25.0375 30.1192 25.4416 29.9969C25.8457 29.8746 26.2138 29.6516 26.5129 29.348L30.1248 25.6922L23.3733 21.2313L20.28 23.7506C20.1615 23.8465 20.022 23.9112 19.8735 23.9393C19.725 23.9674 19.572 23.9579 19.4279 23.9116C16.8595 22.9439 14.5318 21.4077 12.6115 19.4129C10.6253 17.516 9.0835 15.185 8.10122 12.5937C8.05966 12.4368 8.05828 12.2716 8.09721 12.114C8.13614 11.9565 8.21406 11.8118 8.32349 11.6939L10.8241 8.63473L6.32303 1.88183Z" fill="currentColor"></path>
			</g>
			<defs>
			<clipPath id="clip0_97_4547">
			<rect width="32" height="32" fill="currentColor"></rect>
			</clipPath>
			</defs>
		</symbol>
		<symbol id="wish" viewBox="0 0 24 24" fill="currentColor">
			<path d="M3 3C3 2.20435 3.31607 1.44129 3.87868 0.87868C4.44129 0.316071 5.20435 0 6 0L18 0C18.7956 0 19.5587 0.316071 20.1213 0.87868C20.6839 1.44129 21 2.20435 21 3V23.25C20.9999 23.3857 20.9631 23.5188 20.8933 23.6351C20.8236 23.7515 20.7236 23.8468 20.604 23.9108C20.4844 23.9748 20.3497 24.0052 20.2142 23.9988C20.0787 23.9923 19.9474 23.9492 19.8345 23.874L12 19.6515L4.1655 23.874C4.05256 23.9492 3.92135 23.9923 3.78584 23.9988C3.65033 24.0052 3.5156 23.9748 3.396 23.9108C3.2764 23.8468 3.17641 23.7515 3.10667 23.6351C3.03694 23.5188 3.00007 23.3857 3 23.25V3ZM6 1.5C5.60218 1.5 5.22064 1.65804 4.93934 1.93934C4.65804 2.22064 4.5 2.60218 4.5 3V21.849L11.5845 18.126C11.7076 18.0441 11.8521 18.0004 12 18.0004C12.1479 18.0004 12.2924 18.0441 12.4155 18.126L19.5 21.849V3C19.5 2.60218 19.342 2.22064 19.0607 1.93934C18.7794 1.65804 18.3978 1.5 18 1.5H6Z" fill="currentColor"></path>
		</symbol>
		<symbol id="cart" viewBox="0 0 28 28" fill="currentColor">
			<path d="M8.75 26.25C9.7165 26.25 10.5 25.4665 10.5 24.5C10.5 23.5335 9.7165 22.75 8.75 22.75C7.7835 22.75 7 23.5335 7 24.5C7 25.4665 7.7835 26.25 8.75 26.25Z" fill="currentColor"></path>
			<path d="M21 26.25C21.9665 26.25 22.75 25.4665 22.75 24.5C22.75 23.5335 21.9665 22.75 21 22.75C20.0335 22.75 19.25 23.5335 19.25 24.5C19.25 25.4665 20.0335 26.25 21 26.25Z" fill="currentColor"></path>
			<path d="M24.5 6.12499H5.0925L4.375 2.44999C4.33409 2.24938 4.22413 2.06946 4.06425 1.94156C3.90437 1.81365 3.7047 1.74587 3.5 1.74999H0V3.49999H2.7825L6.125 20.3C6.16591 20.5006 6.27587 20.6805 6.43575 20.8084C6.59563 20.9363 6.7953 21.0041 7 21H22.75V19.25H7.7175L7 15.75H22.75C22.9523 15.7549 23.15 15.6896 23.3095 15.5652C23.4691 15.4408 23.5805 15.2649 23.625 15.0675L25.375 7.19249C25.4043 7.06267 25.4036 6.92786 25.373 6.79834C25.3424 6.66881 25.2826 6.54798 25.1982 6.44504C25.1138 6.34211 25.0071 6.25977 24.8861 6.20431C24.7651 6.14885 24.6331 6.12172 24.5 6.12499ZM22.05 14H6.6675L5.4425 7.87499H23.4062L22.05 14Z" fill="currentColor"></path>
		</symbol>
		<symbol id="insta" viewBox="0 0 24 24" fill="currentColor">
			<path fill-rule="evenodd" clip-rule="evenodd" d="M7.465 1.066C8.638 1.012 9.012 1 12 1C14.988 1 15.362 1.013 16.534 1.066C17.706 1.119 18.506 1.306 19.206 1.577C19.939 1.854 20.604 2.287 21.154 2.847C21.714 3.396 22.146 4.06 22.422 4.794C22.694 5.494 22.88 6.294 22.934 7.464C22.988 8.639 23 9.013 23 12C23 14.988 22.987 15.362 22.934 16.535C22.881 17.705 22.694 18.505 22.422 19.205C22.146 19.9391 21.7133 20.6042 21.154 21.154C20.604 21.714 19.939 22.146 19.206 22.422C18.506 22.694 17.706 22.88 16.536 22.934C15.362 22.988 14.988 23 12 23C9.012 23 8.638 22.987 7.465 22.934C6.295 22.881 5.495 22.694 4.795 22.422C4.06092 22.146 3.39582 21.7133 2.846 21.154C2.28638 20.6047 1.85331 19.9399 1.577 19.206C1.306 18.506 1.12 17.706 1.066 16.536C1.012 15.361 1 14.987 1 12C1 9.012 1.013 8.638 1.066 7.466C1.119 6.294 1.306 5.494 1.577 4.794C1.85372 4.06008 2.28712 3.39531 2.847 2.846C3.39604 2.2865 4.06047 1.85344 4.794 1.577C5.494 1.306 6.294 1.12 7.464 1.066H7.465ZM16.445 3.046C15.285 2.993 14.937 2.982 12 2.982C9.063 2.982 8.715 2.993 7.555 3.046C6.482 3.095 5.9 3.274 5.512 3.425C4.999 3.625 4.632 3.862 4.247 4.247C3.88205 4.60205 3.60118 5.03428 3.425 5.512C3.274 5.9 3.095 6.482 3.046 7.555C2.993 8.715 2.982 9.063 2.982 12C2.982 14.937 2.993 15.285 3.046 16.445C3.095 17.518 3.274 18.1 3.425 18.488C3.601 18.965 3.882 19.398 4.247 19.753C4.602 20.118 5.035 20.399 5.512 20.575C5.9 20.726 6.482 20.905 7.555 20.954C8.715 21.007 9.062 21.018 12 21.018C14.938 21.018 15.285 21.007 16.445 20.954C17.518 20.905 18.1 20.726 18.488 20.575C19.001 20.375 19.368 20.138 19.753 19.753C20.118 19.398 20.399 18.965 20.575 18.488C20.726 18.1 20.905 17.518 20.954 16.445C21.007 15.285 21.018 14.937 21.018 12C21.018 9.063 21.007 8.715 20.954 7.555C20.905 6.482 20.726 5.9 20.575 5.512C20.375 4.999 20.138 4.632 19.753 4.247C19.3979 3.88207 18.9657 3.60121 18.488 3.425C18.1 3.274 17.518 3.095 16.445 3.046V3.046ZM10.595 15.391C11.3797 15.7176 12.2534 15.7617 13.0669 15.5157C13.8805 15.2697 14.5834 14.7489 15.0556 14.0422C15.5278 13.3356 15.7401 12.4869 15.656 11.6411C15.572 10.7953 15.197 10.005 14.595 9.405C14.2112 9.02148 13.7472 8.72781 13.2363 8.54515C12.7255 8.36248 12.1804 8.29536 11.6405 8.34862C11.1006 8.40187 10.5792 8.57418 10.1138 8.85313C9.64846 9.13208 9.25074 9.51074 8.9493 9.96185C8.64786 10.413 8.45019 10.9253 8.37052 11.462C8.29084 11.9986 8.33115 12.5463 8.48854 13.0655C8.64593 13.5847 8.91648 14.0626 9.28072 14.4647C9.64496 14.8668 10.0938 15.1832 10.595 15.391ZM8.002 8.002C8.52702 7.47698 9.15032 7.0605 9.8363 6.77636C10.5223 6.49222 11.2575 6.34597 12 6.34597C12.7425 6.34597 13.4777 6.49222 14.1637 6.77636C14.8497 7.0605 15.473 7.47698 15.998 8.002C16.523 8.52702 16.9395 9.15032 17.2236 9.8363C17.5078 10.5223 17.654 11.2575 17.654 12C17.654 12.7425 17.5078 13.4777 17.2236 14.1637C16.9395 14.8497 16.523 15.473 15.998 15.998C14.9377 17.0583 13.4995 17.654 12 17.654C10.5005 17.654 9.06234 17.0583 8.002 15.998C6.94166 14.9377 6.34597 13.4995 6.34597 12C6.34597 10.5005 6.94166 9.06234 8.002 8.002V8.002ZM18.908 7.188C19.0381 7.06527 19.1423 6.91768 19.2143 6.75397C19.2863 6.59027 19.3248 6.41377 19.3274 6.23493C19.33 6.05609 19.2967 5.87855 19.2295 5.71281C19.1622 5.54707 19.0624 5.39651 18.936 5.27004C18.8095 5.14357 18.6589 5.04376 18.4932 4.97652C18.3275 4.90928 18.1499 4.87598 17.9711 4.87858C17.7922 4.88119 17.6157 4.91965 17.452 4.9917C17.2883 5.06374 17.1407 5.1679 17.018 5.298C16.7793 5.55103 16.6486 5.88712 16.6537 6.23493C16.6588 6.58274 16.7992 6.91488 17.0452 7.16084C17.2911 7.40681 17.6233 7.54723 17.9711 7.5523C18.3189 7.55737 18.655 7.42669 18.908 7.188V7.188Z" fill="currentColor"></path>
		</symbol>
		<symbol id="wa" viewBox="0 0 24 24" fill="currentColor">
			<g clip-path="url(#clip0_463_10642)">
			<path fill-rule="evenodd" clip-rule="evenodd" d="M17.415 14.382C17.117 14.233 15.656 13.515 15.384 13.415C15.112 13.316 14.914 13.267 14.715 13.565C14.517 13.861 13.948 14.531 13.775 14.729C13.601 14.928 13.428 14.952 13.131 14.804C12.834 14.654 11.876 14.341 10.741 13.329C9.858 12.541 9.261 11.568 9.088 11.27C8.915 10.973 9.069 10.812 9.218 10.664C9.352 10.531 9.515 10.317 9.664 10.144C9.813 9.96998 9.862 9.84598 9.961 9.64698C10.061 9.44898 10.011 9.27598 9.936 9.12698C9.862 8.97798 9.268 7.51498 9.02 6.91998C8.779 6.34098 8.534 6.41998 8.352 6.40998C8.178 6.40198 7.98 6.39998 7.782 6.39998C7.584 6.39998 7.262 6.47398 6.99 6.77198C6.717 7.06898 5.95 7.78798 5.95 9.25098C5.95 10.713 7.014 12.126 7.163 12.325C7.312 12.523 9.258 15.525 12.239 16.812C12.949 17.118 13.502 17.301 13.933 17.437C14.645 17.664 15.293 17.632 15.805 17.555C16.375 17.47 17.563 16.836 17.811 16.142C18.058 15.448 18.058 14.853 17.984 14.729C17.91 14.605 17.712 14.531 17.414 14.382H17.415ZM11.993 21.785H11.989C10.2184 21.7853 8.48037 21.3093 6.957 20.407L6.597 20.193L2.855 21.175L3.854 17.527L3.619 17.153C2.62914 15.5773 2.10529 13.7538 2.108 11.893C2.11 6.44298 6.544 2.00898 11.997 2.00898C14.637 2.00898 17.119 3.03898 18.985 4.90698C19.9054 5.82356 20.6349 6.91355 21.1313 8.11388C21.6277 9.31421 21.8811 10.6011 21.877 11.9C21.875 17.35 17.441 21.785 11.993 21.785V21.785ZM20.405 3.48798C19.3032 2.3789 17.9922 1.49952 16.5481 0.90078C15.1039 0.302044 13.5553 -0.00413728 11.992 -2.00576e-05C5.438 -2.00576e-05 0.102 5.33498 0.1 11.892C0.096963 13.9787 0.644374 16.0294 1.687 17.837L0 24L6.304 22.346C8.04787 23.2961 10.0021 23.7939 11.988 23.794H11.993C18.547 23.794 23.883 18.459 23.885 11.901C23.8898 10.3383 23.5848 8.79008 22.9874 7.34601C22.3901 5.90195 21.5124 4.59065 20.405 3.48798" fill="currentColor"></path>
			</g>
			<defs>
			<clipPath id="clip0_463_10642">
			<rect width="24" height="24" fill="white"></rect>
			</clipPath>
			</defs>
		</symbol>
		<symbol id="doc" viewBox="0 0 26 26" fill="currentColor">
			<path d="M20.8813 7.55625L15.1938 1.86875C15.0313 1.70625 14.8687 1.625 14.625 1.625H6.5C5.60625 1.625 4.875 2.35625 4.875 3.25V22.75C4.875 23.6437 5.60625 24.375 6.5 24.375H19.5C20.3938 24.375 21.125 23.6437 21.125 22.75V8.125C21.125 7.88125 21.0438 7.71875 20.8813 7.55625ZM14.625 3.575L19.175 8.125H14.625V3.575ZM19.5 22.75H6.5V3.25H13V8.125C13 9.01875 13.7312 9.75 14.625 9.75H19.5V22.75Z" fill="currentColor"></path>
			<path d="M8.125 17.875H17.875V19.5H8.125V17.875Z" fill="currentColor"></path>
			<path d="M8.125 13H17.875V14.625H8.125V13Z" fill="currentColor"></path>
		</symbol>
		<symbol id="time" viewBox="0 0 24 24" fill="currentColor">
			<path d="M12 22.5C9.9233 22.5 7.89323 21.8842 6.16652 20.7304C4.4398 19.5767 3.09399 17.9368 2.29927 16.0182C1.50455 14.0996 1.29661 11.9884 1.70176 9.95156C2.1069 7.91476 3.10693 6.04383 4.57538 4.57538C6.04383 3.10693 7.91476 2.1069 9.95156 1.70176C11.9884 1.29661 14.0996 1.50455 16.0182 2.29927C17.9368 3.09399 19.5767 4.4398 20.7304 6.16652C21.8842 7.89323 22.5 9.9233 22.5 12C22.5 14.7848 21.3938 17.4555 19.4246 19.4246C17.4555 21.3938 14.7848 22.5 12 22.5ZM12 3C10.22 3 8.47992 3.52785 6.99987 4.51678C5.51983 5.50571 4.36628 6.91132 3.68509 8.55585C3.0039 10.2004 2.82567 12.01 3.17294 13.7558C3.5202 15.5016 4.37737 17.1053 5.63604 18.364C6.89472 19.6226 8.49836 20.4798 10.2442 20.8271C11.99 21.1743 13.7996 20.9961 15.4442 20.3149C17.0887 19.6337 18.4943 18.4802 19.4832 17.0001C20.4722 15.5201 21 13.78 21 12C21 9.61306 20.0518 7.32387 18.364 5.63604C16.6761 3.94822 14.387 3 12 3Z" fill="currentColor"></path>
			<path d="M15.4425 16.5L11.25 12.3075V5.25H12.75V11.685L16.5 15.4425L15.4425 16.5Z" fill="currentColor"></path>
		</symbol>
		<symbol id="x" viewBox="0 0 20 20" fill="currentColor">
			<path fill-rule="evenodd" clip-rule="evenodd" d="M10.0001 8.57143L1.42857 -6.10352e-05L0 1.42851L8.5715 10L2.92739e-05 18.5715L1.4286 20L10.0001 11.4286L18.5714 19.9999L20 18.5714L11.4286 10L20 1.42861L18.5715 3.48636e-05L10.0001 8.57143Z" fill="currentColor"></path>
		</symbol>
		<symbol id="counter-favorite" viewBox="0 0 24 24" fill="currentColor">
      		<path fill-rule="evenodd" clip-rule="evenodd" d="M7 4a1 1 0 0 0-1 1v14a1 1 0 0 0 1.514.858L12 17.166l4.485 2.692A1 1 0 0 0 18 19V5a1 1 0 0 0-1-1H7Z"></path>
		</symbol>
		<symbol id="arr_top" viewBox="0 0 10 12" fill="currentColor">
			<path d="M0.625001 5.125L1.24188 5.74187L4.5625 2.42562L4.5625 11.25L5.4375 11.25L5.4375 2.42562L8.75812 5.74188L9.375 5.125L5 0.75L0.625001 5.125Z" fill="currentColor"></path>
		</symbol>
		<symbol id="arr_down" viewBox="0 0 10 12" fill="currentColor">
			<path d="M9.375 6.875L8.75812 6.25812L5.4375 9.57437L5.4375 0.749999L4.5625 0.749999L4.5625 9.57437L1.24187 6.25812L0.625 6.875L5 11.25L9.375 6.875Z" fill="currentColor"></path>
		</symbol>
		<symbol id="arr_right" viewBox="0 0 24 20" fill="currentColor">
			<path d="M14 0L12.57 1.393L20.15 9H0V11H20.15L12.57 18.573L14 20L24 10L14 0Z" fill="currentColor"></path>
		</symbol>
		<symbol id="arr_left" viewBox="0 0 24 20" fill="currentColor">
			<path d="M10 20L11.41 18.59L3.83 11H24V9H3.83L11.41 1.41L10 0L0 10L10 20Z" fill="currentColor"></path>
		</symbol>

	</defs>
</svg>

<!--JavaScript-->
    <script src="<?php echo get_template_directory_uri();?>/js/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri();?>/slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox-1.3.8.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/script.js?v=<?=filemtime(get_template_directory() . '/js/script.js')?>"></script>

</body>

<?php wp_footer(); ?>
</html>
