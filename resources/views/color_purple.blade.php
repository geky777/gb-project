<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>The Color Purple - Interactive Archive</title>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&family=Cormorant+Garamond:wght@300;400&display=swap" rel="stylesheet">

<style>
/* GENERAL STYLING */
* { margin:0; padding:0; box-sizing:border-box; }
body {
  font-family: 'Cormorant Garamond', serif;
  background: linear-gradient(to bottom, #3d2645, #5a3d5c);
  color: #f0e6ef;
  overflow-x: hidden;
}
a { text-decoration:none; color:#d4a5d4; }
a:hover { color:#fff; }

h1,h2,h3,h4 { font-family:'Cinzel Decorative', serif; color:#d4a5d4; }
header { text-align:center; padding:50px 20px; }
h1 { font-size:clamp(3rem,6vw,5rem); }
h2 { font-size:1.8rem; margin-top:10px; font-style:italic; }

.content-container { max-width:1000px; margin:auto; padding:50px 20px 20px; }

/* CHARACTER CARDS */
.character-container { display:flex; flex-wrap:wrap; gap:20px; justify-content:center; }
.character-card { background:#4a2f4f; padding:20px; border-radius:15px; box-shadow:0 10px 25px rgba(0,0,0,0.5); width:200px; transition:transform 0.3s; }
.character-card:hover { transform:translateY(-10px) scale(1.05); }
.character-card h4 { color:#d4a5d4; margin-bottom:8px; }
.character-card p { font-size:0.9rem; line-height:1.4; }

/* QUOTES */
.quote { background: rgba(212,165,212,0.1); border-left:4px solid #d4a5d4; margin:20px 0; padding:15px 20px; font-style:italic; }
.quote:hover { background: rgba(212,165,212,0.3); transform:scale(1.02); transition:0.3s; }

/* BACK BUTTON */
.back-btn { position: fixed; top:20px; left:20px; padding:10px 20px; border:2px solid #d4a5d4; border-radius:6px; color:#d4a5d4; background:transparent; z-index:1000; transition:0.3s; }
.back-btn:hover { background:#d4a5d4; color:#3d2645; }

/* ANALYSIS CONTAINER */
.analysis-container { background:#4a2f4f; padding:20px; border-radius:15px; box-shadow:0 10px 25px rgba(0,0,0,0.5); text-align:justify; }
.analysis-container .analysis-text { font-size:1rem; line-height:1.6; }

/* AUTHOR CARD */
.author-card {
  background:#4a2f4f;
  padding:20px;
  border-radius:15px;
  box-shadow:0 10px 25px rgba(0,0,0,0.5);
  text-align:center;
  max-width:600px;
  margin:30px auto;
}
.author-card h4 {
  color:#d4a5d4;
  margin-bottom:10px;
  font-size:1.5rem;
}

/* PLAY GAME SECTION */
#play-game { margin-top:30px; padding:20px; background:#4a2f4f; border-radius:15px; box-shadow:0 10px 25px rgba(0,0,0,0.5); }
#play-game h3 { margin-bottom:15px; text-align:center; }
#play-game button { margin:5px; padding:10px 15px; border:2px solid #d4a5d4; background:transparent; color:#d4a5d4; border-radius:5px; cursor:pointer; transition:0.3s; }
#play-game button:hover { background:#d4a5d4; color:#3d2645; }

/* MODAL */
.modal { 
  display:none; 
  position:fixed; 
  z-index:2000; 
  left:0; top:0; 
  width:100%; height:100%; 
  background-color:rgba(0,0,0,0.7); 
  align-items:center; 
  justify-content:center;
}
.modal.show { display:flex; }
.modal-content { 
  background-color:#4a2f4f; 
  padding:20px; 
  border:2px solid #d4a5d4; 
  width:90%; max-width:600px; 
  border-radius:15px; 
  box-shadow:0 10px 25px rgba(0,0,0,0.5); 
  text-align:center;
  max-height:90vh;
  overflow-y:auto;
}
.modal-content button { margin:5px; padding:10px 15px; border:2px solid #d4a5d4; background:transparent; color:#d4a5d4; border-radius:5px; cursor:pointer; transition:0.3s; }
.modal-content button:hover { background:#d4a5d4; color:#3d2645; }
.modal-close { float:right; font-size:1.5rem; cursor:pointer; color:#d4a5d4; }

section { opacity:0; transform:translateY(30px); transition: all 0.8s ease-in-out; margin-bottom:50px; }
section.visible { opacity:1; transform:translateY(0); }
</style>
</head>
<body>
<a href="javascript:history.back()" class="back-btn">← Back</a>

<header>
  <h1>The Color Purple</h1>
  <h2>"Until you do right by me, everything you think about is gonna crumble"</h2>
</header>

<div class="content-container">

  <section>
    <h3>Summary</h3>
    <p>Celie is a young African-American girl who suffers abuse from her father and later her husband, Albert. She is silenced, oppressed, and forced into submission, writing letters to God as her only outlet. Through her letters and connections with other women, she begins to understand her own worth and the possibilities for a better life.</p>
    <p style="margin-top:15px;">With the help of Shug Avery and her sister Nettie, Celie gains confidence, independence, and self-respect. She eventually confronts her abuser, builds a loving community with other women, and reunites with Nettie. The novel ends with Celie empowered, embracing love, family, and freedom, celebrating her journey of personal growth.</p>
  </section>

  <section>
    <h3>Main Characters</h3>
    <div class="character-container">
      <div class="character-card">
        <h4>Celie</h4>
        <p>The protagonist, a poor African-American woman who overcomes oppression to find her independence and strength.</p>
      </div>
      <div class="character-card">
        <h4>Nettie</h4>
        <p>Celie's younger sister, who becomes a missionary in Africa and writes letters to Celie.</p>
      </div>
      <div class="character-card">
        <h4>Mr. Albert</h4>
        <p>Celie's abusive husband who later changes and seeks redemption.</p>
      </div>
      <div class="character-card">
        <h4>Shug Avery</h4>
        <p>A singer and Celie's friend and lover, who inspires Celie to gain confidence and self-love.</p>
      </div>
      <div class="character-card">
        <h4>Sofia</h4>
        <p>A strong-willed woman who resists oppression and stands up for herself.</p>
      </div>
    </div>
  </section>

  <section>
    <h3>Themes & Lessons</h3>
    <div class="analysis-container">
      <div class="analysis-text">
        <p><em>The Color Purple</em> explores powerful themes of <strong>resilience, independence, and self-discovery</strong>. Through Celie's journey, Alice Walker examines the struggles and triumphs of African-American women facing oppression, abuse, and systemic injustice.</p>
        <p style="margin-top:15px;"><strong>Key Lessons:</strong> The novel teaches us that finding one's voice is essential to liberation, that love and community can heal deep wounds, and that every person has inherent worth regardless of their circumstances. It celebrates the power of sisterhood and the transformative nature of self-love.</p>
      </div>
    </div>
  </section>
  
  <section>
    <h3>About the Author</h3>
    <div class="author-card">
      <h4>Alice Walker</h4>
      <p>Alice Walker is an American novelist, poet, and activist, born in 1944 in Eatonton, Georgia. She is best known for her novel <em>The Color Purple</em>, which won the Pulitzer Prize for Fiction and the National Book Award in 1983. Walker's works often explore themes of race, gender, identity, social injustice, and the struggles and resilience of African-American women. Beyond fiction, she is also known for her poetry, essays, and activism in civil rights, women's rights, and human rights causes.</p>
    </div>
  </section>

  <section id="play-game">
    <h3>Would you like to explore the story interactively?</h3>
    <div style="text-align:center;">
      <button id="playYes">Yes</button>
      <button id="playNo">No</button>
    </div>
  </section>
</div>

<!-- MODAL -->
<div id="gameModal" class="modal" aria-hidden="true">
  <div class="modal-content" role="dialog" aria-modal="true" aria-labelledby="gameTitle">
    <div id="gameContent"></div>
  </div>
</div>

<script>
// Scroll animation
const sections = document.querySelectorAll('section');
function revealSections() {
  sections.forEach(sec => {
    const top = sec.getBoundingClientRect().top;
    if(top < window.innerHeight - 100) sec.classList.add('visible');
  });
}
revealSections();
window.addEventListener('scroll', revealSections);

// Modal setup
const modal = document.getElementById('gameModal');
const gameContent = document.getElementById('gameContent');
document.getElementById('playYes').onclick = openGameOptions;
document.getElementById('playNo').onclick = () => {
  gameContent.innerHTML = `<p style="text-align:center;">You can explore anytime!</p>`;
  modal.classList.add('show');
  modal.setAttribute('aria-hidden', 'false');
  setTimeout(closeModal, 2000);
};
modal.addEventListener('click', (e) => { if (e.target === modal) closeModal(); });

function openGameOptions() {
  modal.classList.add('show');
  modal.setAttribute('aria-hidden', 'false');
  showActivityOptions();
}
function closeModal() {
  modal.classList.remove('show');
  modal.setAttribute('aria-hidden', 'true');
}

function showActivityOptions() {
  gameContent.innerHTML = `
    <span class="modal-close" id="closeModalBtn">&times;</span>
    <h3>Choose an Interactive Activity</h3>
    <div>
      <button id="game1Btn">Who Would You Be?</button>
      <button id="game2Btn">Theme Hunt</button>
      <button id="game3Btn">What Happens Next?</button>
    </div>
  `;
  document.getElementById('closeModalBtn').onclick = closeModal;
  document.getElementById('game1Btn').onclick = startGame1;
  document.getElementById('game2Btn').onclick = startGame2;
  document.getElementById('game3Btn').onclick = startGame3;
}

// Game 1: Who Would You Be
function startGame1() {
  gameContent.innerHTML = `
    <span class="modal-close" id="closeModalBtn">&times;</span>
    <h3>Game 1: Who Would You Be?</h3>
    <p>Imagine you are Celie, Nettie, or Shug during a key moment in the story.</p>
    <p><strong>Question:</strong> What would you do if you were in their place?</p>
    <div>
      <button onclick="checkGame1('stand')">Stand up for yourself</button>
      <button onclick="checkGame1('seek')">Seek guidance and support</button>
      <button onclick="checkGame1('silent')">Remain silent</button>
    </div>
    <p id="game1-result"></p>
  `;
  document.getElementById('closeModalBtn').onclick = closeModal;
}

function checkGame1(choice) {
  const result = document.getElementById('game1-result');
  if(choice === 'stand') {
    result.innerHTML = `<strong>✅ Great choice!</strong> Like Celie eventually does, standing up for yourself is a powerful act of self-respect and courage. This mirrors Celie's journey of finding her voice and reclaiming her dignity.`;
  } else if(choice === 'seek') {
    result.innerHTML = `<strong>✅ Wise decision!</strong> Seeking support, like Celie does with Shug and Nettie, shows strength and wisdom. Community and connection are vital themes in the novel.`;
  } else {
    result.innerHTML = `<strong>💭 Understandable...</strong> While silence was Celie's initial response to trauma, the novel shows us that finding our voice is essential for healing and freedom.`;
  }
}

// Game 2: Theme Hunt
function startGame2() {
  gameContent.innerHTML = `
    <span class="modal-close" id="closeModalBtn">&times;</span>
    <h3>Game 2: Theme Hunt</h3>
    <p style="font-style:italic;">"I'm poor, I'm black, I may be ugly, but I'm here, I exist, I matter."</p>
    <p><strong>Question:</strong> Which theme is shown here?</p>
    <div>
      <button onclick="checkGame2('resilience')">Resilience</button>
      <button onclick="checkGame2('oppression')">Oppression</button>
      <button onclick="checkGame2('independence')">Independence</button>
    </div>
    <p id="game2-result"></p>
  `;
  document.getElementById('closeModalBtn').onclick = closeModal;
}

function checkGame2(choice) {
  const result = document.getElementById('game2-result');
  if(choice === 'resilience' || choice === 'independence') {
    result.innerHTML = `<strong>✅ Correct!</strong> This powerful quote embodies both <strong>Resilience</strong> and <strong>Independence</strong>. Celie asserts her worth despite all the hardships she's faced, declaring her right to exist and be valued.`;
  } else {
    result.innerHTML = `<strong>💭 Partially...</strong> While oppression is present in the story, this quote is more about <strong>Resilience</strong> and <strong>Independence</strong>—Celie claiming her value and refusing to be diminished.`;
  }
}

// Game 3: What Happens Next
function startGame3() {
  gameContent.innerHTML = `
    <span class="modal-close" id="closeModalBtn">&times;</span>
    <h3>Game 3: What Happens Next?</h3>
    <p>Celie receives a letter from Nettie after years of separation.</p>
    <p><strong>Question:</strong> What do you think happens next?</p>
    <div>
      <button onclick="checkGame3('ignore')">She ignores it</button>
      <button onclick="checkGame3('rejoice')">She rejoices and reconnects with her sister</button>
      <button onclick="checkGame3('albert')">She gives it to Albert</button>
    </div>
    <p id="game3-result"></p>
  `;
  document.getElementById('closeModalBtn').onclick = closeModal;
}

function checkGame3(choice) {
  const result = document.getElementById('game3-result');
  if(choice === 'rejoice') {
    result.innerHTML = `<strong>✅ Exactly right!</strong> Celie rejoices and reconnects with her sister Nettie. This reunion is one of the most powerful and emotional moments in the novel, representing hope, healing, and the restoration of family bonds.`;
  } else if(choice === 'ignore') {
    result.innerHTML = `<strong>❌ Not quite.</strong> Celie would never ignore a letter from her beloved sister! She rejoices and reconnects with Nettie after years of painful separation.`;
  } else {
    result.innerHTML = `<strong>❌ Not at all.</strong> By this point in the story, Celie has grown stronger and would never give such precious letters to Albert. She rejoices and reconnects with her sister instead!`;
  }
}
</script>

</body>
</html>