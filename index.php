<?php
$pageTitle = 'Activian Guild';
include __DIR__ . '/includes/header.php';
?>
<main>
  <section id="home" class="hero section-shell">
    <div class="hero__content reveal">
      <p class="eyebrow" data-i18n="hero.eyebrow">MU: Dark Epoch • Gravity 21</p>
      <h1 data-i18n="hero.title">Activian — peaceful PvE guild with a champion mindset.</h1>
      <p class="hero__lead" data-i18n="hero.lead">We protect neutrality, grow together, help guildmates, and move step by step toward becoming the strongest guild on Gravity 21.</p>
      <div class="hero__actions" aria-label="Quick navigation">
        <a class="button button--primary" href="#rules" data-i18n="nav.rules">Rules</a>
        <a class="button" href="#events" data-i18n="nav.events">Events</a>
        <a class="button" href="#auction" data-i18n="nav.auction">Auction</a>
        <a class="button" href="#activity" data-i18n="nav.activity">Activity</a>
      </div>
    </div>
    <aside class="guild-card reveal" aria-label="Guild profile">
      <div class="guild-card__sigil">A</div>
      <dl>
        <div><dt data-i18n="profile.guild">Guild</dt><dd>Activian</dd></div>
        <div><dt data-i18n="profile.server">Server</dt><dd>Gravity 21</dd></div>
        <div><dt data-i18n="profile.leader">Leader</dt><dd>Tsunade</dd></div>
        <div><dt data-i18n="profile.focus">Focus</dt><dd data-i18n="profile.focusValue">PvE, events, teamwork</dd></div>
      </dl>
    </aside>
  </section>

  <section id="about" class="section-shell section-grid">
    <div class="section-heading reveal">
      <p class="eyebrow" data-i18n="about.eyebrow">About us</p>
      <h2 data-i18n="about.title">A neutral guild built on respect, discipline, and cooperation.</h2>
    </div>
    <div class="content-card reveal">
      <p data-i18n="about.body1">Activian is a PvE guild in MU: Dark Epoch on Gravity 21. We keep peaceful relations with other guilds, avoid unnecessary conflict, and choose teamwork over chaos.</p>
      <p data-i18n="about.body2">Our goals are simple: preserve peace and neutrality, support every active member, perform well in guild activities, and become the best guild on the server through consistency rather than toxicity.</p>
      <p data-i18n="about.body3">PvP is not our daily identity. We fight only where the event rules make it meaningful, and even there we represent Activian with discipline.</p>
    </div>
  </section>

  <section class="values section-shell">
    <article class="value-card reveal"><span>01</span><h3 data-i18n="values.peace.title">Peace</h3><p data-i18n="values.peace.text">Neutrality and calm relations with other guilds come first.</p></article>
    <article class="value-card reveal"><span>02</span><h3 data-i18n="values.team.title">Teamwork</h3><p data-i18n="values.team.text">We help guildmates with advice, events, and progression when we can.</p></article>
    <article class="value-card reveal"><span>03</span><h3 data-i18n="values.activity.title">Activity</h3><p data-i18n="values.activity.text">Members are expected to appear at least once per day whenever possible.</p></article>
    <article class="value-card reveal"><span>04</span><h3 data-i18n="values.respect.title">Respect</h3><p data-i18n="values.respect.text">No toxicity, aggression, insults, or long conflicts.</p></article>
  </section>

  <section id="rules" class="section-shell">
    <div class="section-heading reveal">
      <p class="eyebrow" data-i18n="rules.eyebrow">Guild Codex</p>
      <h2 data-i18n="rules.title">Rules every Activian member follows.</h2>
    </div>
    <div class="rule-list reveal" data-i18n-list="rules.items"></div>
    <div class="notice reveal"><strong data-i18n="rules.warningTitle">Warning policy:</strong> <span data-i18n="rules.warningText">up to three warnings may be issued for violations. Continued violations can lead to removal from the guild.</span></div>
  </section>

  <section id="events" class="section-shell section-grid section-grid--reverse">
    <div class="section-heading reveal">
      <p class="eyebrow" data-i18n="events.eyebrow">Events</p>
      <h2 data-i18n="events.title">Event rules for organized PvE play and meaningful PvP moments.</h2>
    </div>
    <div class="content-card reveal">
      <p data-i18n="events.intro">MU: Dark Epoch rewards active participation in guild activities, bosses, limited-time events, and cooperative progression. Activian treats events as team work: arrive prepared, follow calls, and support the group.</p>
      <ul class="check-list" data-i18n-list="events.items"></ul>
      <p class="muted" data-i18n="events.note">Specific event schedules and requirements may change in-game, so always check current announcements before joining.</p>
    </div>
  </section>

  <section id="auction" class="section-shell section-grid">
    <div class="section-heading reveal">
      <p class="eyebrow" data-i18n="auction.eyebrow">Auction</p>
      <h2 data-i18n="auction.title">Guild auction placeholder.</h2>
    </div>
    <div class="content-card reveal placeholder-card">
      <p data-i18n="auction.body">Auction rules will be filled in by the guild. For now: members may bid and outbid freely, but if you agree on an item deal, keep your promise and respect the terms.</p>
      <ul class="check-list" data-i18n-list="auction.placeholders"></ul>
    </div>
  </section>

  <section id="activity" class="section-shell section-grid section-grid--reverse">
    <div class="section-heading reveal">
      <p class="eyebrow" data-i18n="activity.eyebrow">Activity</p>
      <h2 data-i18n="activity.title">Activity requirements placeholder.</h2>
    </div>
    <div class="content-card reveal placeholder-card">
      <p data-i18n="activity.body">Members are expected to be active at least once per day when possible, participate in events, and help guildmates. Detailed activity rules will be added later.</p>
      <ul class="check-list" data-i18n-list="activity.placeholders"></ul>
    </div>
  </section>

  <section id="join" class="section-shell join-section reveal">
    <p class="eyebrow" data-i18n="join.eyebrow">Join us</p>
    <h2 data-i18n="join.title">Want to stand with Activian?</h2>
    <p data-i18n="join.body">Join our Discord, contact the guild leadership, and check the current recruitment requirements. Requirements are placeholders and will be updated by the guild.</p>
    <a class="button button--primary" href="https://discord.gg/VXvjvvekyn" target="_blank" rel="noopener noreferrer" data-i18n="join.discord">Open Activian Discord</a>
  </section>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
