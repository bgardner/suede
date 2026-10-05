# Suede

Suede is a refined design system centered on authority and presence, expressed through WordPress and other digital media. Its visual language favors strong typography, generous space, deliberate contrast, purposeful imagery, and confident composition.

Suede isn’t designed around a collection of styles. It’s designed around a system of decisions.

## Principles

* Prefer fewer, stronger ideas. Decide what deserves attention and give it scale, weight, and room. Remove anything that weakens the message.
* Hierarchy before decoration. Establish priority through type, spacing, form, and contrast. Let those elements work before adding anything more.
* Space makes things matter. Give content enough room to breathe. Apply it with true purpose, not just for visual effect or unnecessary decoration.
* Repetition creates coherence. Use consistent patterns to build familiarity and rhythm. Introduce variation only when the content calls for it.
* Restraint, not minimalism. Be selective while preserving balance, character, and depth. Compositions should always feel confident and complete.

## How to apply this system

Use this file to guide design decisions, including when generating or modifying an experience with AI. Apply explicit project requirements first, then Suede’s principles, then its defaults. Use expressive choices to adapt the defaults while preserving hierarchy, coherence, legibility, and purpose.

Treat the primary typeface, typography settings, palette, widths, spacing scale, and interface treatments as defaults. Expanded and condensed typography, accent typefaces, oversized display type, overlap, rounded geometry, and changes in visual mode are deliberate choices rather than automatic additions. Introduce them only when they serve a specific content or compositional need.

When modifying an existing experience, preserve its established decisions unless the request requires changing them. Resolve unspecified details through the existing system before introducing new treatments. Do not turn a local change into an unsolicited redesign.

This file defines design intent, not proof of an implementation. For WordPress work, inspect `theme.json`, style variations, registered block styles, patterns, and relevant assets before using named capabilities. Reuse existing presets and native controls where they support the intended result. Do not invent preset slugs, block styles, assets, or supported controls. If implementation differs from this guidance, identify the difference rather than silently changing the design specification or claiming a capability exists.

## Visual thesis

Before building a new composition, establish a clear visual thesis appropriate to the subject, audience, content, location, and purpose. For an existing composition, identify its thesis before making changes.

Determine what should dominate, what should support it, what should create contrast or tension, what should repeat, where the composition should change visual mode, and what can be removed. Form a brief internal plan for these relationships before implementing sections. State the rationale when it helps review the work; do not require a separate approval step for routine design decisions.

Establish a visual world rather than treating a neutral canvas as the default. Decide how color fields, imagery, typography, and negative space should define the atmosphere of the experience. A composition may remain predominantly light, predominantly dark, image-led, or move between visual modes. Choose according to the subject and purpose rather than alternating treatments for variety.

Centered layouts, card grids, split compositions, and repeated section structures are valid when the content benefits from them. Do not select them automatically because they are familiar or easy to generate. Restraint does not require small typography, empty sections, or uniformly quiet composition.

## Composition

Every composition should have a clear visual priority. Establish what deserves attention first, then make supporting elements visibly subordinate. Where the experience requires action, make the primary next step easy to identify without giving every link equal prominence.

Use controlled contrast to create tension and hierarchy. Pair large with small, dense with open, image with type, and dominant with quiet. Restraint should limit competing ideas, not their scale.

Design relationships rather than assembling components. Begin with the relationship the content should create, then introduce only the elements needed to construct it. Do not place content in cards or bordered containers unless grouping, comparison, or interaction benefits from that structure.

Let important elements carry meaningful visual weight. Typography and imagery may become architectural elements within a composition. When something deserves presence, give it sufficient scale and territory while keeping supporting content readable and useful.

Allow elements to extend beyond the primary grid, overlap, layer, or share compositional space when doing so strengthens hierarchy, atmosphere, or visual relationships. Preserve legibility, access to controls, and a sensible reading order. Expressive positioning must have a workable narrow-screen treatment and must not produce unintended horizontal scrolling.

Create rhythm through repetition and change. Repeat structures to establish order, then vary them when the content requires a change in emphasis, pace, or mode. Avoid both mechanically identical sections and a new visual treatment for every section.

Before adding an element, determine whether hierarchy, typography, space, imagery, or contrast can accomplish the same purpose.

## Design system

### Typography

Use **Google Sans Flex** as the primary typeface. Standard width is the default for body copy, navigation, controls, and most headings. Use variable width selectively to create contrast while preserving typographic continuity.

Use **110% expanded** for large editorial statements, hero typography, numerals, pull quotes, and moments that benefit from greater presence and horizontal scale. Use **85% condensed** when density or verticality strengthens the composition, particularly for oversized headlines, section markers, or narrow compositions.

Expanded and condensed widths are expressive tools, not alternate defaults or remedies for poorly fitted text. Keep sustained reading copy at standard width. Choose a consistent role for each expressive width rather than switching proportions arbitrarily.

A secondary or accent typeface may be introduced when it strengthens the subject or editorial character. Assign it a defined role, such as display headings or quotations, and preserve the primary face for supporting typography. Do not add typefaces solely to create variety.

Set body text at **18px**, **400** weight, with a **1.75 line height**. Headings default to **500** weight with no added letter spacing. Use **1.0 line height** for display headings where the letterforms and wrapping remain clear; increase it for smaller or multiline reading headings when needed. Use **600** weight selectively for strong emphasis rather than as a default display weight.

Use the type scale **12, 14, 16, 18, 20, 24, 30, 36, 48, and 60px** as the standard hierarchy. Sizes above 18px may scale fluidly with the viewport. Display type may exceed 60px when its role requires greater presence; treat this as an intentional extension, not a new default. Avoid arbitrary intermediate sizes when the existing scale establishes the relationship.

Keep supporting copy visibly subordinate without shrinking essential information into metadata. Reserve the smallest sizes for brief secondary information, not sustained reading.

Use uppercase text, **0.05em** letter spacing, and **500** weight primarily for small navigation, labels, metadata, and eyebrows. Do not extend this treatment to long-form copy or prominent display typography.

Control wrapping through available width, type size, and balanced text where appropriate. Avoid isolated final words when they weaken the composition, but do not force desktop line breaks that become awkward on smaller screens. Keep heading semantics independent of visual size.

Apply `-webkit-font-smoothing: antialiased` and `-moz-osx-font-smoothing: grayscale` where supported, particularly for light text on dark backgrounds.

### Color

Build primarily with black (`#000000`) and white (`#ffffff`). Use accent gold (`#aa6600`) for emphasis, interaction, rules, borders, and small moments of identity rather than as a dominant field color.

Use opacity variants of black and white (**80%, 60%, 50%, 15%, 10%**) and accent (**80%, 60%, 50%, 20%, 10%**) to establish hierarchy. Prefer tonal variation within the system over unrelated grays or secondary colors. Opacity is a compositional tool, not a guarantee of readable contrast; check the resulting color against its actual background.

Maintain strong contrast for primary and secondary text. Reserve low-contrast tones for nonessential borders, backgrounds, overlays, and subtle depth. Do not assume a muted preset is suitable for text on every surface.

Use **Fade Down**, **Fade Up**, **Fade Right**, or **Fade Left** when imagery needs contrast for overlaid content or controlled tonal depth. Choose the direction according to the text position and image. Check legibility across the entire text area and responsive crop rather than assuming the gradient is sufficient. Introduce another gradient only when these treatments cannot meet a specific functional need.

### Layout and spacing

Use three maximum widths according to content:

* **640px:** Sustained reading and long-form text.
* **960px:** Focused compositions combining text with supporting media.
* **1280px:** Broad page compositions, navigation, grids, columns, and substantial imagery.

Treat **1280px** as the primary composition width for page sections, not a requirement that every element fill it. Backgrounds may span the viewport while inner content generally sits within a centered container. Reading copy may retain its 640px measure within a wider composition. Do not constrain multi-column sections to the reading measure.

Maintain consistent horizontal page gutters using the project’s existing values. When no values exist, choose gutters from the spacing scale and reduce them deliberately as the viewport narrows. Containers must retain usable edge space before reaching their maximum width.

Use the spacing scale **20, 30, 40, 60, 80, and 100px** for composition. Use smaller values to connect related elements and larger values to separate sections, ideas, or changes in visual mode. Major sections should usually receive more space than their internal relationships.

Compact interface gaps, icon-to-label spacing, and control padding may require values below 20px. Reuse the project’s existing compact spacing values; where none exist, establish a small consistent set rather than choosing a new value for each element.

Space must establish rhythm, focus, or hierarchy. Do not increase it merely to make a composition feel luxurious or minimal. Reduce large spacing on smaller screens while preserving the distinction between related content and separate sections.

### Responsive behavior

Preserve hierarchy as the canvas narrows. Scale or simplify typography, spacing, imagery, and composition deliberately rather than mechanically collapsing the desktop layout.

Stack elements when their proportions or reading measure become compromised. Preserve a sensible document, reading, and keyboard order when changing visual arrangement. Remove or reduce offsets and overlaps before they obscure content or controls.

Give significant imagery a deliberate narrow-screen crop and focal point. Scale display type without crowding supporting content. Adapt navigation before labels become cramped or wrap unintentionally. Avoid fixed heights that clip content when text wraps or users enlarge it.

Review representative narrow, intermediate, and wide viewports, including widths between layout changes. A successful desktop composition does not establish responsive correctness.

### Accessibility

Maintain readable contrast, legible typography, semantic headings, meaningful link text, accessible control names, and visible keyboard focus. Preserve access to content and controls when text is enlarged.

Provide text alternatives for informative imagery and treat purely decorative imagery accordingly. Do not use color, icons, hover, or motion as the sole means of conveying information or enabling an action.

Respect reduced-motion preferences. Accessibility should reinforce Suede’s clarity and restraint throughout the experience.

### Shape and depth

Favor square, direct geometry for buttons, form controls, separators, and primary interface elements. Moderate or rounded geometry may be selected when it supports the subject or visual thesis. Treat that choice as part of the expression and apply it consistently within each control family; do not vary corners arbitrarily from element to element.

Use borders and rules sparingly, typically at **1px**, to define structure. Avoid outlining every content group.

Treat shadows as accents, not ambient decoration. Suede’s shadow vocabulary includes a soft neutral shadow, a solid offset accent shadow, and a subtle offset accent shadow. Use verified project presets when an element needs separation or graphic emphasis. Avoid routine card shadows across the interface.

### Interaction

Inline text links should remain visibly identifiable, normally through an underline. Navigation may use a consistent treatment appropriate to its context, with clear current and interactive states. Hover may shift toward the accent color where contrast remains readable.

On compatible backgrounds, primary buttons use accent gold with white, small uppercase text, medium weight, and generous padding. Outline buttons use a transparent background with an accent border and text. Filled buttons may become transparent with an accent border and text on hover; outline buttons may become accent-filled with white text.

Check each button state against its actual background. On dark or image-led surfaces, adapt foreground, fill, or border using the core palette when the default treatment loses clarity. Keep primary and secondary actions distinguishable and corner geometry consistent.

Interactive feedback should be immediate but quiet. Prefer color and border changes; use restrained transforms only when they clarify interaction. Provide visible focus states and distinct active, selected, or disabled states where applicable. Do not make an essential action discoverable only on hover.

### Iconography

Use **Google Material Symbols Sharp**, with **200** weight and **48px optical size**, for interface and supporting iconography. Optical size is the icon design setting, not a required rendered dimension. Choose displayed size according to the control or composition.

Use simple, recognizable symbols to clarify meaning, navigation, or interaction. Maintain consistent weight and treatment, using `currentColor` where appropriate. Do not add icons to every heading, feature, or list item for decoration. Give icon-only controls accessible names; hide decorative icons from assistive technology when adjacent text already provides their meaning.

## Imagery

Imagery should reinforce the subject, character, and purpose of the experience while carrying meaningful visual weight. Prefer fewer, substantial images over small decorative imagery.

Hero imagery may be full-width, contained, layered, or integrated into the composition. Choose the treatment according to the visual thesis rather than defaulting to a full-width Cover block. When overlaying text, select imagery and tonal treatments that preserve legibility across crops and viewport sizes.

Choose cropping, focal point, scale, and positioning according to the composition while preserving subject details essential to the content. Do not use imagery merely to fill space, and avoid embedding essential copy or controls inside images.

When generating imagery, favor grounded color, credible subjects, and tonal qualities that complement the system. Do not equate refinement with generic beige interiors, empty architecture, or stock luxury imagery regardless of the subject.

## Motion

Motion should reinforce hierarchy, focus, and interaction without calling attention to itself. Use the existing motion vocabulary to introduce content, clarify interaction, or add depth where appropriate. Do not animate every section automatically.

Use **250ms** for quick interface transitions and **500ms** for larger visual movement, with **ease-out** timing. For entrance motion, use a travel distance of approximately **30px**. For image zoom on hover, use a scale of approximately **1.05** and contain the enlargement within the intended image area. Keep this zoom treatment on imagery rather than text or interface controls.

Content must remain available if entrance animation does not run. Disable or simplify nonessential movement when reduced motion is requested. Meaning, navigation, and interaction must survive with motion disabled.

## Review

Before delivering a new composition or meaningful revision, check the rendered result against these questions:

* Is the primary visual priority clear, with supporting content visibly subordinate?
* Do typography, imagery, and space express a coherent thesis rather than a generic template?
* Do repeated elements behave consistently, with variation justified by content?
* Do widths, spacing, and grouping communicate useful relationships?
* Does the composition retain its intent across narrow, intermediate, and wide viewports?
* Are text, controls, and every interaction state readable and accessible on their actual backgrounds?
* Does the experience remain usable with keyboard input, enlarged text, and motion disabled?
* Are referenced presets, assets, and capabilities verified in the implementation?
* Can anything be removed without weakening meaning, function, or character?

When rendered verification is unavailable, distinguish design intent from verified behavior. Do not claim checks that were not performed.

## Application

Treat these specifications as constraints, not templates. Preserve Suede’s visual character across subjects and media without forcing every composition into the same aesthetic. Interpret the system according to content, context, and medium. Variation should strengthen the composition rather than add novelty.
