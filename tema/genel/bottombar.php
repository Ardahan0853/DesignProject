<style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900');
        *
        
         @media (max-width: 768px) {
            .bottom-menu-container {
                display: block;
                position: fixed;
                bottom: 0;
                left: 0;
                width: 100%;
                z-index: 9999;
            }
        }
        @media (min-width: 769px) {
            .bottom-menu-container {
                display: none;
            }
        }

        .bottom-menu-container {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: 9999;
            /* Diğer içeriklerin üzerinde kalmasını sağlar */
        }

        .navigation {
            width: 100%;
            height: 80px;
            position: fixed;
            /* Menünün sabit olarak kalmasını sağlar */
            bottom: 0;
            background: #2f2f2f;
            display: flex;
            justify-content: center;
            z-index: 1;
          
        }

        .navigation ul {
            position: relative;
            display: flex;
            width: 400px;
            z-index: 1000;
            z-index: 1000;
            justify-content: center;
            margin-top: 20px;
        }

        .navigation ul li {
            position: relative;
            list-style: none;
            width: 80px;
            height: 80px;
            z-index: 1;
        }

        .navigation ul li a {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            text-align: center;
            font-weight: 500;
        }

        .navigation ul li a .icon {
            position: relative;
            display: block;
            line-height: 85px;
            font-size: 1.5em;
            text-align: center;
            transition: 0.5s;
            color: rgba(255, 255, 255, 0.5);
        }

        .navigation ul li a:hover .icon {
            color: rgba(255, 255, 255, 1);
        }

        .navigation ul li.active a .icon {
            transform: translateY(-8px);
            color: #29fd53;
        }

        .navigation ul li a .text {
            position: absolute;
            opacity: 0;
            font-weight: 400;
            font-size: 0.6em;
            letter-spacing: 0.05em;
            transition: 0.5s;
            color: white;
            text-transform: uppercase;
            font-weight: 600;
            transform: translateY(0px);
        }

        .navigation ul li.active a .text {
            transform: translateY(16px);
            opacity: 1;
        }

        .indicator {
            position: fixed; /* Bu satırı ekleyin */
            bottom: 0; /* Ekranın alt kısmına sabitlemek için */
            left: 0; /* Sol kenara sabitlemek için, isteğe bağlı */
            width: 80px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.5s;
            z-index: -1;
        }

        .indicator::before {
            content: '';
            position: absolute;
            bottom: 14px;
            width: 80%;
            height: 16px;
            background: #03a9f4;
            background: #29fd53;
            border-radius: 10px;
        }

        .navigation ul li:nth-child(2).active ~ .indicator {
            transform: translateX(calc(80px * 1));
        }

        .navigation ul li:nth-child(3).active ~ .indicator {
            transform: translateX(calc(80px * 2));
        }

        .navigation ul li:nth-child(4).active ~ .indicator {
            transform: translateX(calc(80px * 3));
        }

        .navigation ul li:nth-child(5).active ~ .indicator {
            transform: translateX(calc(80px * 4));
        }

    </style>

<!DOCTYPE html>
<html>
<head>
<title>Magic Menu Indicator</title>

</head>
<body>
    <div class="bottom-menu-container">
	<div class="navigation">
		<ul>
			<li id="home" class="list active">
				<a href="/">
					<span class="icon">
						<ion-icon name="home-outline"></ion-icon>
					</span>
					<span class="text">AnaSayfa</span>
				</a>
			</li>
			<li id="profile" class="list">
				<a href="dernegimiz">
					<span class="icon">
						<ion-icon name="person-outline"></ion-icon>
					</span>
					<span class="text">Derneğimiz</span>
				</a>
			</li>
			<li id="messages" class="list">
				<a href="hizmetler">
					<span class="icon">
						<ion-icon name="chatbubble-outline"></ion-icon>
					</span>
					<span class="text">Hizmetlerimiz</span>
				</a>
			</li>
			<li id="photos"  class="list">
				<a href="haberler">
					<span class="icon">
						<ion-icon name="document-outline"></ion-icon>
					</span>
					<span class="text">Haberler</span>
				</a>
			</li>
			<li id="settings" class="list">
				<a href="iletisim">
					<span class="icon">
						<ion-icon name="location-outline"></ion-icon>
					</span>
					<span class="text">İletişim</span>
				</a>
			</li>
		
		</ul>
  </div>
	</div>
	<script>
	const listItems = document.querySelectorAll('.list');
const indicator = document.getElementById('indicator');
const currentPage = window.location.pathname;

// Tüm menü öğelerini seç

function moveIndicator() {
    const selectedItem = document.querySelector('.list.active');
    const selectedItemId = selectedItem.id;
    const selectedPosition = selectedItem.getBoundingClientRect().left;

    indicator.style.left = `${selectedPosition}px`;
}

// Sayfa URL'sini al
const currentPage = window.location.pathname;

// Tüm menü öğelerini seç
const listItems = document.querySelectorAll('.list');

document.addEventListener('DOMContentLoaded', function() {
    const currentPage = window.location.pathname;
    const listItems = document.querySelectorAll('.list');

    listItems.forEach(item => {
        const link = item.querySelector('a').getAttribute('href');
        if (currentPage.includes(link)) {
            item.classList.add('active');
        }
    });

    moveIndicator();
});
		const list = document.querySelectorAll('.list');
		function activelink(){
			list.forEach((item) =>
			item.classList.remove('active'));
			this.classList.add('active');
		}
		list.forEach((item) =>
		item.addEventListener('click', activelink));
	</script>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>